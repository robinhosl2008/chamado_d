--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: postgres
--

CREATE PROCEDURAL LANGUAGE plpgsql;


ALTER PROCEDURAL LANGUAGE plpgsql OWNER TO postgres;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: dicionario_dados; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE dicionario_dados (
    co_dicionario integer NOT NULL,
    co_relatorio integer NOT NULL,
    no_fisico_coluna character varying(200),
    no_apelido_coluna character varying(200),
    co_ordem integer
);


ALTER TABLE public.dicionario_dados OWNER TO admin;

--
-- Name: COLUMN dicionario_dados.co_dicionario; Type: COMMENT; Schema: public; Owner: admin
--

COMMENT ON COLUMN dicionario_dados.co_dicionario IS '
';


--
-- Name: COLUMN dicionario_dados.co_ordem; Type: COMMENT; Schema: public; Owner: admin
--

COMMENT ON COLUMN dicionario_dados.co_ordem IS '
';


--
-- Name: dicionario_dados_co_dicionario_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE dicionario_dados_co_dicionario_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.dicionario_dados_co_dicionario_seq OWNER TO admin;

--
-- Name: dicionario_dados_co_dicionario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE dicionario_dados_co_dicionario_seq OWNED BY dicionario_dados.co_dicionario;


--
-- Name: eas; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

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


ALTER TABLE public.eas OWNER TO admin;

--
-- Name: eas_conexao; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE eas_conexao (
    co_conexao integer NOT NULL,
    co_cnes integer,
    st_principal boolean,
    st_conexao boolean DEFAULT true NOT NULL,
    ds_dsn text,
    no_charset character varying(250),
    no_usuario character varying(200),
    ds_senha character varying(200),
    no_conexao character varying(100)
);


ALTER TABLE public.eas_conexao OWNER TO admin;

--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE eas_conexao_co_conexao_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.eas_conexao_co_conexao_seq OWNER TO admin;

--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE eas_conexao_co_conexao_seq OWNED BY eas_conexao.co_conexao;


--
-- Name: menu; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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
    co_usuario_alteracao integer,
    st_nao_exibir boolean DEFAULT false
);


ALTER TABLE public.menu OWNER TO admin;

--
-- Name: menu_co_menu_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE menu_co_menu_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.menu_co_menu_seq OWNER TO admin;

--
-- Name: menu_co_menu_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE menu_co_menu_seq OWNED BY menu.co_menu;


--
-- Name: modulo; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE modulo (
    no_modulo character varying(50) NOT NULL,
    no_exibicao character varying(100) NOT NULL,
    ds_modulo text,
    nu_ordem integer DEFAULT 0
);


ALTER TABLE public.modulo OWNER TO admin;

--
-- Name: perfil; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE perfil (
    co_perfil integer NOT NULL,
    no_perfil character varying(150),
    ds_perfil text,
    st_perfil boolean DEFAULT true NOT NULL
);


ALTER TABLE public.perfil OWNER TO admin;

--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE perfil_co_perfil_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.perfil_co_perfil_seq OWNER TO admin;

--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE perfil_co_perfil_seq OWNED BY perfil.co_perfil;


--
-- Name: permissao; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE public.permissao OWNER TO admin;

--
-- Name: recurso; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE public.recurso OWNER TO admin;

--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE recurso_co_recurso_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.recurso_co_recurso_seq OWNER TO admin;

--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE recurso_co_recurso_seq OWNED BY recurso.co_recurso;


--
-- Name: relatorio; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE relatorio (
    co_relatorio integer NOT NULL,
    no_relatorio character varying(255),
    co_menu integer,
    ds_query text,
    no_action character varying(250),
    ds_query_totalizadora text,
    co_ordem integer DEFAULT 0
);


ALTER TABLE public.relatorio OWNER TO admin;

--
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE relatorio_co_relatorio_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.relatorio_co_relatorio_seq OWNER TO admin;

--
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE relatorio_co_relatorio_seq OWNED BY relatorio.co_relatorio;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
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


ALTER TABLE public.usuario OWNER TO admin;

--
-- Name: usuario_co_usuario_seq; Type: SEQUENCE; Schema: public; Owner: admin
--

CREATE SEQUENCE usuario_co_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.usuario_co_usuario_seq OWNER TO admin;

--
-- Name: usuario_co_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: admin
--

ALTER SEQUENCE usuario_co_usuario_seq OWNED BY usuario.co_usuario;


--
-- Name: co_dicionario; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY dicionario_dados ALTER COLUMN co_dicionario SET DEFAULT nextval('dicionario_dados_co_dicionario_seq'::regclass);


--
-- Name: co_conexao; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY eas_conexao ALTER COLUMN co_conexao SET DEFAULT nextval('eas_conexao_co_conexao_seq'::regclass);


--
-- Name: co_menu; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY menu ALTER COLUMN co_menu SET DEFAULT nextval('menu_co_menu_seq'::regclass);


--
-- Name: co_perfil; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY perfil ALTER COLUMN co_perfil SET DEFAULT nextval('perfil_co_perfil_seq'::regclass);


--
-- Name: co_recurso; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY recurso ALTER COLUMN co_recurso SET DEFAULT nextval('recurso_co_recurso_seq'::regclass);


--
-- Name: co_relatorio; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY relatorio ALTER COLUMN co_relatorio SET DEFAULT nextval('relatorio_co_relatorio_seq'::regclass);


--
-- Name: co_usuario; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario ALTER COLUMN co_usuario SET DEFAULT nextval('usuario_co_usuario_seq'::regclass);


--
-- Name: dicionario_dados_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY dicionario_dados
    ADD CONSTRAINT dicionario_dados_pkey PRIMARY KEY (co_dicionario, co_relatorio);


--
-- Name: eas_conexao_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_pkey PRIMARY KEY (co_conexao);


--
-- Name: eas_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY eas
    ADD CONSTRAINT eas_pkey PRIMARY KEY (co_cnes);


--
-- Name: menu_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT menu_pkey PRIMARY KEY (co_menu);


--
-- Name: modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY modulo
    ADD CONSTRAINT modulo_pkey PRIMARY KEY (no_modulo);


--
-- Name: perfil_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY perfil
    ADD CONSTRAINT perfil_pkey PRIMARY KEY (co_perfil);


--
-- Name: permissao_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_pkey PRIMARY KEY (co_perfil, co_recurso);


--
-- Name: recurso_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY recurso
    ADD CONSTRAINT recurso_pkey PRIMARY KEY (co_recurso);


--
-- Name: relatorio_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY relatorio
    ADD CONSTRAINT relatorio_pkey PRIMARY KEY (co_relatorio);


--
-- Name: un_usercpf; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT un_usercpf UNIQUE (nu_cpf);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (co_usuario);


--
-- Name: dicionario_dados_co_relatorio_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY dicionario_dados
    ADD CONSTRAINT dicionario_dados_co_relatorio_fkey FOREIGN KEY (co_relatorio) REFERENCES relatorio(co_relatorio) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: eas_conexao_co_cnes_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_co_cnes_fkey FOREIGN KEY (co_cnes) REFERENCES eas(co_cnes);


--
-- Name: fk_menu_modulo; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT fk_menu_modulo FOREIGN KEY (no_modulo) REFERENCES modulo(no_modulo) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_perfil; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_perfil FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_recurso; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_recurso FOREIGN KEY (co_recurso) REFERENCES recurso(co_recurso) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: permissao_co_usuario_alteracao_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_alteracao_fkey FOREIGN KEY (co_usuario_alteracao) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: permissao_co_usuario_cadastro_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_cadastro_fkey FOREIGN KEY (co_usuario_cadastro) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: relatorio_co_menu_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY relatorio
    ADD CONSTRAINT relatorio_co_menu_fkey FOREIGN KEY (co_menu) REFERENCES menu(co_menu) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: user_co_perfil_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT user_co_perfil_fkey FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

