
DROP TABLE modulo CASCADE;
DROP TABLE eas_conexao CASCADE;
DROP TABLE eas CASCADE;
DROP TABLE usuario CASCADE;
DROP TABLE menu CASCADE;

DROP TABLE recurso CASCADE;
DROP TABLE permissao CASCADE;
DROP TABLE perfil CASCADE;

--
-- Name: modulo; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE modulo (
    no_modulo character varying(50) NOT NULL,
    no_exibicao character varying(100) NOT NULL,
    ds_modulo text
);


--
-- Name: modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY modulo
    ADD CONSTRAINT modulo_pkey PRIMARY KEY (no_modulo);



CREATE TABLE eas (
    co_cnes integer NOT NULL,
    st_local boolean,
    st_central boolean,
    co_cnpj character varying(100),
    ds_endereco character varying(200),
    dt_cadastro timestamp without time zone,
    no_eas character varying(255),
    ds_eas character varying(255),
    nu_telefone character varying(15),
    ds_municipio character varying(100)
);


--
-- Name: eas_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY eas
    ADD CONSTRAINT eas_pkey PRIMARY KEY (co_cnes);

    
CREATE TABLE eas_conexao (
    co_conexao integer NOT NULL,
    co_cnes integer,
    st_principal boolean,
    nu_ip character varying(15),
    nu_porta character varying(6),
    nu_porta_rsync character varying(15),
    st_conexao boolean DEFAULT true NOT NULL
);


--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE eas_conexao_co_conexao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE eas_conexao_co_conexao_seq OWNED BY eas_conexao.co_conexao;


--
-- Name: co_conexao; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY eas_conexao ALTER COLUMN co_conexao SET DEFAULT nextval('eas_conexao_co_conexao_seq'::regclass);


--
-- Name: eas_conexao_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_pkey PRIMARY KEY (co_conexao);


--
-- Name: eas_conexao_co_cnes_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_co_cnes_fkey FOREIGN KEY (co_cnes) REFERENCES eas(co_cnes);

    
--------------------------ACESSO---------------------------

--
-- Name: perfil; Type: TABLE; Schema: acesso; Owner: -; Tablespace: 
--

CREATE TABLE perfil (
    co_perfil integer NOT NULL,
    no_perfil character varying(150),
    ds_perfil text,
    st_perfil boolean DEFAULT true NOT NULL
);


--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE; Schema: acesso; Owner: -
--

CREATE SEQUENCE perfil_co_perfil_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE OWNED BY; Schema: acesso; Owner: -
--

ALTER SEQUENCE perfil_co_perfil_seq OWNED BY perfil.co_perfil;


--
-- Name: user; Type: TABLE; Schema: acesso; Owner: -; Tablespace: 
--

CREATE TABLE usuario (
    co_usuario integer NOT NULL,
    nu_cpf character varying(11),
    ds_password character varying(200),
    no_usuario character varying(255),
    ds_login character varying(39),
    dt_ultimo_login timestamp without time zone,
    ds_email character varying(120),
    co_perfil integer,
    nu_celular character varying(15)
);


--
-- Name: user_id_seq; Type: SEQUENCE; Schema: acesso; Owner: -
--

CREATE SEQUENCE usuario_co_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: acesso; Owner: -
--

ALTER SEQUENCE usuario_co_usuario_seq OWNED BY usuario.co_usuario;


--
-- Name: menu; Type: TABLE; Schema: acesso; Owner: -; Tablespace: 
--

CREATE TABLE menu (
    co_menu integer NOT NULL,
    no_modulo character varying(50),
    no_exibicao character varying(100),
    ds_tooltip character varying(255),
    ds_url character varying(255) NOT NULL,
    nu_ordem integer DEFAULT 0 NOT NULL,
    st_ativo boolean DEFAULT true NOT NULL,
    dt_cadastro timestamp without time zone DEFAULT now() NOT NULL,
    co_usuario_cadastro integer,
    dt_alteracao timestamp without time zone,
    co_usuario_alteracao integer
);


--
-- Name: menu_co_menu_seq; Type: SEQUENCE; Schema: acesso; Owner: -
--

CREATE SEQUENCE menu_co_menu_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: menu_co_menu_seq; Type: SEQUENCE OWNED BY; Schema: acesso; Owner: -
--

ALTER SEQUENCE menu_co_menu_seq OWNED BY menu.co_menu;


--
-- Name: permissao; Type: TABLE; Schema: acesso; Owner: -; Tablespace: 
--

CREATE TABLE permissao (
    co_perfil integer NOT NULL,
    dt_alteracao timestamp without time zone,
    co_usuario_alteracao integer,
    co_recurso integer NOT NULL,
    st_permissao boolean DEFAULT true NOT NULL,
    dt_cadastro timestamp with time zone DEFAULT now() NOT NULL,
    co_usuario_cadastro integer
);


--
-- Name: recurso; Type: TABLE; Schema: acesso; Owner: -; Tablespace: 
--

CREATE TABLE recurso (
    co_recurso integer NOT NULL,
    no_recurso character varying(150),
    ds_recurso character varying(255),
    tp_recurso integer,
    dt_cadastro timestamp without time zone DEFAULT now() NOT NULL,
    co_usuario_cadastro integer,
    dt_alteracao timestamp without time zone,
    co_usuario_alteracao integer
);


--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE; Schema: acesso; Owner: -
--

CREATE SEQUENCE recurso_co_recurso_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE OWNED BY; Schema: acesso; Owner: -
--

ALTER SEQUENCE recurso_co_recurso_seq OWNED BY recurso.co_recurso;


--
-- Name: co_perfil; Type: DEFAULT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY perfil ALTER COLUMN co_perfil SET DEFAULT nextval('perfil_co_perfil_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY usuario ALTER COLUMN co_usuario SET DEFAULT nextval('usuario_co_usuario_seq'::regclass);


--
-- Name: co_menu; Type: DEFAULT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY menu ALTER COLUMN co_menu SET DEFAULT nextval('menu_co_menu_seq'::regclass);


--
-- Name: co_recurso; Type: DEFAULT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY recurso ALTER COLUMN co_recurso SET DEFAULT nextval('recurso_co_recurso_seq'::regclass);


--
-- Name: user_pkey; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (co_usuario);


--
-- Name: menu_pkey; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT menu_pkey PRIMARY KEY (co_menu);


--
-- Name: perfil_pkey; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY perfil
    ADD CONSTRAINT perfil_pkey PRIMARY KEY (co_perfil);


--
-- Name: permissao_pkey; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_pkey PRIMARY KEY (co_perfil, co_recurso);


--
-- Name: recurso_pkey; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY recurso
    ADD CONSTRAINT recurso_pkey PRIMARY KEY (co_recurso);


--
-- Name: un_usercpf; Type: CONSTRAINT; Schema: acesso; Owner: -; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT un_usercpf UNIQUE (nu_cpf);


--
-- Name: fk_menu_modulo; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT fk_menu_modulo FOREIGN KEY (no_modulo) REFERENCES public.modulo(no_modulo) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_perfil; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_perfil FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_recurso; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_recurso FOREIGN KEY (co_recurso) REFERENCES recurso(co_recurso) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: user_co_perfil_fkey; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT user_co_perfil_fkey FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;

--
-- Name: permissao_co_usuario_alteracao_fkey; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_alteracao_fkey FOREIGN KEY (co_usuario_alteracao) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: permissao_co_usuario_cadastro_fkey; Type: FK CONSTRAINT; Schema: acesso; Owner: -
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_cadastro_fkey FOREIGN KEY (co_usuario_cadastro) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;

