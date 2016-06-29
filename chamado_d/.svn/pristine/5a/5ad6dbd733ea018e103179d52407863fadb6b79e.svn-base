--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: eas; Type: TABLE; Schema: public; Owner: report; Tablespace: 
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


ALTER TABLE public.eas OWNER TO report;

--
-- Name: eas_conexao; Type: TABLE; Schema: public; Owner: report; Tablespace: 
--

CREATE TABLE eas_conexao (
    co_conexao integer NOT NULL,
    co_cnes integer,
    st_principal boolean,
    nu_ip character varying(15),
    nu_porta character varying(6),
    nu_porta_rsync character varying(15),
    st_conexao boolean DEFAULT true NOT NULL
);


ALTER TABLE public.eas_conexao OWNER TO report;

--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE eas_conexao_co_conexao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.eas_conexao_co_conexao_seq OWNER TO report;

--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE eas_conexao_co_conexao_seq OWNED BY eas_conexao.co_conexao;


--
-- Name: menu; Type: TABLE; Schema: public; Owner: report; Tablespace: 
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


ALTER TABLE public.menu OWNER TO report;

--
-- Name: menu_co_menu_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE menu_co_menu_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.menu_co_menu_seq OWNER TO report;

--
-- Name: menu_co_menu_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE menu_co_menu_seq OWNED BY menu.co_menu;


--
-- Name: modulo; Type: TABLE; Schema: public; Owner: report; Tablespace: 
--

CREATE TABLE modulo (
    no_modulo character varying(50) NOT NULL,
    no_exibicao character varying(100) NOT NULL,
    ds_modulo text,
    nu_ordem integer DEFAULT 0
);


ALTER TABLE public.modulo OWNER TO report;

--
-- Name: perfil; Type: TABLE; Schema: public; Owner: report; Tablespace: 
--

CREATE TABLE perfil (
    co_perfil integer NOT NULL,
    no_perfil character varying(150),
    ds_perfil text,
    st_perfil boolean DEFAULT true NOT NULL
);


ALTER TABLE public.perfil OWNER TO report;

--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE perfil_co_perfil_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.perfil_co_perfil_seq OWNER TO report;

--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE perfil_co_perfil_seq OWNED BY perfil.co_perfil;


--
-- Name: permissao; Type: TABLE; Schema: public; Owner: report; Tablespace: 
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


ALTER TABLE public.permissao OWNER TO report;

--
-- Name: recurso; Type: TABLE; Schema: public; Owner: report; Tablespace: 
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


ALTER TABLE public.recurso OWNER TO report;

--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE recurso_co_recurso_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.recurso_co_recurso_seq OWNER TO report;

--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE recurso_co_recurso_seq OWNED BY recurso.co_recurso;


--
-- Name: relatorio; Type: TABLE; Schema: public; Owner: report; Tablespace: 
--

CREATE TABLE relatorio (
    co_relatorio integer NOT NULL,
    no_relatorio character varying(255),
    co_menu integer
);


ALTER TABLE public.relatorio OWNER TO report;

--
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE relatorio_co_relatorio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.relatorio_co_relatorio_seq OWNER TO report;

--
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE relatorio_co_relatorio_seq OWNED BY relatorio.co_relatorio;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: report; Tablespace: 
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


ALTER TABLE public.usuario OWNER TO report;

--
-- Name: usuario_co_usuario_seq; Type: SEQUENCE; Schema: public; Owner: report
--

CREATE SEQUENCE usuario_co_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_co_usuario_seq OWNER TO report;

--
-- Name: usuario_co_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: report
--

ALTER SEQUENCE usuario_co_usuario_seq OWNED BY usuario.co_usuario;


--
-- Name: co_conexao; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY eas_conexao ALTER COLUMN co_conexao SET DEFAULT nextval('eas_conexao_co_conexao_seq'::regclass);


--
-- Name: co_menu; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY menu ALTER COLUMN co_menu SET DEFAULT nextval('menu_co_menu_seq'::regclass);


--
-- Name: co_perfil; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY perfil ALTER COLUMN co_perfil SET DEFAULT nextval('perfil_co_perfil_seq'::regclass);


--
-- Name: co_recurso; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY recurso ALTER COLUMN co_recurso SET DEFAULT nextval('recurso_co_recurso_seq'::regclass);


--
-- Name: co_relatorio; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY relatorio ALTER COLUMN co_relatorio SET DEFAULT nextval('relatorio_co_relatorio_seq'::regclass);


--
-- Name: co_usuario; Type: DEFAULT; Schema: public; Owner: report
--

ALTER TABLE ONLY usuario ALTER COLUMN co_usuario SET DEFAULT nextval('usuario_co_usuario_seq'::regclass);


--
-- Data for Name: eas; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO eas VALUES (1, NULL, NULL, NULL, NULL, NULL, 'HFL', NULL, NULL, NULL);
INSERT INTO eas VALUES (2, NULL, NULL, NULL, NULL, NULL, 'HFI', NULL, NULL, NULL);


--
-- Data for Name: eas_conexao; Type: TABLE DATA; Schema: public; Owner: report
--



--
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('eas_conexao_co_conexao_seq', 1, false);


--
-- Data for Name: menu; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO menu VALUES (3, 'CONSULTA', 'Cadastro', NULL, '/consulta/cadastro/index', 22, true, '2013-04-25 16:29:08.341416', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (4, 'CONSULTA', 'Internação', NULL, '/consulta/internacao/index', 23, true, '2013-04-25 16:29:26.320983', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (5, 'CONSULTA', 'Cirurgia', NULL, '/consulta/cirurgia/index', 24, true, '2013-04-25 16:29:41.963698', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (6, 'CONSULTA', 'Informações Ambulatoriais', NULL, '/consulta/ambulatorio/index', 25, true, '2013-04-25 16:30:09.284144', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (7, 'CONSULTA', 'Indicadores', NULL, '/consulta/indicador/index', 26, true, '2013-04-25 16:30:24.211094', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (8, 'CONSULTA', 'Custos', NULL, '/consulta/custo/index', 27, true, '2013-04-25 16:30:44.984718', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (11, 'CONSULTA', 'Consulta Dashboard', NULL, '/consulta/index', 21, true, '2013-05-08 14:51:43.53937', NULL, NULL, NULL, true);
INSERT INTO menu VALUES (2, 'DEFAULT', 'Principal', NULL, '/default/index', 1, true, '2013-04-25 16:28:35.009765', NULL, NULL, NULL, true);
INSERT INTO menu VALUES (12, 'MANUTENCAO', 'Listar Usuario', NULL, '/manutencao/usuario/index', 32, true, '2013-05-08 15:21:07.098594', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (10, 'MANUTENCAO', 'Cadastro Usuário', NULL, '/manutencao/usuario/adicionar', 33, true, '2013-05-03 15:16:54.235934', NULL, NULL, NULL, NULL);
INSERT INTO menu VALUES (14, 'MANUTENCAO', 'Manutencao Dashboard', NULL, '/manutencao/index', 31, true, '2013-05-08 15:38:37.533026', NULL, NULL, NULL, true);


--
-- Name: menu_co_menu_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('menu_co_menu_seq', 14, true);


--
-- Data for Name: modulo; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO modulo VALUES ('DEFAULT', 'Principal', 'Principal', 1);
INSERT INTO modulo VALUES ('CONSULTA', 'Consulta', 'Consulta Relatórios', 2);
INSERT INTO modulo VALUES ('MANUTENCAO', 'Manutenção', 'Manutencao', 3);


--
-- Data for Name: perfil; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO perfil VALUES (1, 'Administrador', 'Administrador', true);
INSERT INTO perfil VALUES (0, 'Visitante', 'Visitante', true);
INSERT INTO perfil VALUES (2, 'DGH', 'DGH', true);
INSERT INTO perfil VALUES (3, 'Direcao', 'Direção', true);


--
-- Name: perfil_co_perfil_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('perfil_co_perfil_seq', 1, false);


--
-- Data for Name: permissao; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO permissao VALUES (0, NULL, NULL, 3, true, '2013-05-03 15:57:18.899631-03', 1);
INSERT INTO permissao VALUES (0, NULL, NULL, 4, true, '2013-05-03 15:57:18.899631-03', 1);
INSERT INTO permissao VALUES (1, NULL, NULL, 3, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 4, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 5, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 8, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 9, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 10, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 11, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 12, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 13, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 7, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 16, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 6, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 17, true, '2013-05-08 15:42:12.028424-03', NULL);


--
-- Data for Name: recurso; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO recurso VALUES (3, 'Modulo Padrao', '/default/index', 1, '2013-05-03 15:57:18.899631', 1, NULL, NULL);
INSERT INTO recurso VALUES (4, 'Modulo Error', '/default/error', 1, '2013-05-03 15:57:18.899631', 1, NULL, NULL);
INSERT INTO recurso VALUES (5, 'Acesso Total', '/*/*/*', 1, '2013-05-03 15:57:18.93522', 1, NULL, NULL);
INSERT INTO recurso VALUES (8, 'Modulo Consulta Custo', '/consulta/custo/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (9, 'Modulo Consulta Indicador', '/consulta/indicador/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (10, 'Modulo Consulta Ambulatorio', '/consulta/ambulatorio/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (11, 'Modulo Consulta Cirurgia', '/consulta/cirurgia/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (12, 'Modulo Consulta Internacao', '/consulta/internacao/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (13, 'Modulo Consulta Cadastro', '/consulta/cadastro/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (7, 'Modulo Consulta Home', '/consulta/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (16, 'Modulo Manutencao Cadastrar Usuario', '/manutencao/usuario/adicionar', NULL, '2013-05-08 15:21:28.834204', NULL, NULL, NULL);
INSERT INTO recurso VALUES (6, 'Modulo Manutencao Lista Usuario', '/manutencao/usuario/index', 1, '2013-05-03 15:57:18.93522', 1, NULL, NULL);
INSERT INTO recurso VALUES (17, 'Modulo Manutencao Dashboard', '/manutencao/index', NULL, '2013-05-08 15:40:19.447137', NULL, NULL, NULL);


--
-- Name: recurso_co_recurso_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('recurso_co_recurso_seq', 17, true);


--
-- Data for Name: relatorio; Type: TABLE DATA; Schema: public; Owner: report
--



--
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('relatorio_co_relatorio_seq', 1, false);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: report
--

INSERT INTO usuario VALUES (-1, NULL, '123', 'Visitante', 'Visitante', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (1, NULL, '123', 'Sistema', 'Sistema', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (8, '12345678001', '123', 'BERNARDO', 'bernardo', NULL, 'bernardo@datasus.gov.br', 3, NULL);
INSERT INTO usuario VALUES (4, '12345678912', '123', 'CONSUELO', 'consuelo', NULL, 'shell@datasus.gov.br', 1, NULL);
INSERT INTO usuario VALUES (5, '12345678913', '123', 'MARCELO SILVA', 'marcelo', NULL, 'marcelo.pereira@datasus.gov.br', 1, NULL);
INSERT INTO usuario VALUES (9, NULL, '123', 'DGH USUARIO', 'dgh', '2013-05-08 15:44:45', 'dhg@datasus.gov.br', 2, NULL);
INSERT INTO usuario VALUES (3, '12345678911', '123', 'FABIO ROCHA', 'fabio', '2013-05-15 16:58:36', 'fabio@fabiofarias.com.br', 1, NULL);


--
-- Name: usuario_co_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: report
--

SELECT pg_catalog.setval('usuario_co_usuario_seq', 10, true);


--
-- Name: eas_conexao_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_pkey PRIMARY KEY (co_conexao);


--
-- Name: eas_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY eas
    ADD CONSTRAINT eas_pkey PRIMARY KEY (co_cnes);


--
-- Name: menu_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT menu_pkey PRIMARY KEY (co_menu);


--
-- Name: modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY modulo
    ADD CONSTRAINT modulo_pkey PRIMARY KEY (no_modulo);


--
-- Name: perfil_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY perfil
    ADD CONSTRAINT perfil_pkey PRIMARY KEY (co_perfil);


--
-- Name: permissao_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_pkey PRIMARY KEY (co_perfil, co_recurso);


--
-- Name: recurso_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY recurso
    ADD CONSTRAINT recurso_pkey PRIMARY KEY (co_recurso);


--
-- Name: relatorio_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY relatorio
    ADD CONSTRAINT relatorio_pkey PRIMARY KEY (co_relatorio);


--
-- Name: un_usercpf; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT un_usercpf UNIQUE (nu_cpf);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: report; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (co_usuario);


--
-- Name: eas_conexao_co_cnes_fkey; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY eas_conexao
    ADD CONSTRAINT eas_conexao_co_cnes_fkey FOREIGN KEY (co_cnes) REFERENCES eas(co_cnes);


--
-- Name: fk_menu_modulo; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY menu
    ADD CONSTRAINT fk_menu_modulo FOREIGN KEY (no_modulo) REFERENCES modulo(no_modulo) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_perfil; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_perfil FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: fk_permissao_recurso; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT fk_permissao_recurso FOREIGN KEY (co_recurso) REFERENCES recurso(co_recurso) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: permissao_co_usuario_alteracao_fkey; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_alteracao_fkey FOREIGN KEY (co_usuario_alteracao) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: permissao_co_usuario_cadastro_fkey; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY permissao
    ADD CONSTRAINT permissao_co_usuario_cadastro_fkey FOREIGN KEY (co_usuario_cadastro) REFERENCES usuario(co_usuario) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: relatorio_co_menu_fkey; Type: FK CONSTRAINT; Schema: public; Owner: report
--

ALTER TABLE ONLY relatorio
    ADD CONSTRAINT relatorio_co_menu_fkey FOREIGN KEY (co_menu) REFERENCES menu(co_menu) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: user_co_perfil_fkey; Type: FK CONSTRAINT; Schema: public; Owner: report
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

