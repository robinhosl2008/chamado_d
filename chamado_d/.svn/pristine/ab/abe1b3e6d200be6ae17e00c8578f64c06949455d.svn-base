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
-- Name: action; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE action (
    co_action integer NOT NULL,
    no_action character(50) NOT NULL
);


ALTER TABLE public.action OWNER TO tarefa;

--
-- Name: action_co_action_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE action_co_action_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.action_co_action_seq OWNER TO tarefa;

--
-- Name: action_co_action_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE action_co_action_seq OWNED BY action.co_action;


--
-- Name: action_co_action_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('action_co_action_seq', 1, false);


--
-- Name: categoria; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE categoria (
    co_categoria integer NOT NULL,
    no_categoria character(30) NOT NULL
);


ALTER TABLE public.categoria OWNER TO tarefa;

--
-- Name: categoria_co_categoria_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE categoria_co_categoria_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.categoria_co_categoria_seq OWNER TO tarefa;

--
-- Name: categoria_co_categoria_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE categoria_co_categoria_seq OWNED BY categoria.co_categoria;


--
-- Name: categoria_co_categoria_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('categoria_co_categoria_seq', 1, false);


--
-- Name: controller; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE controller (
    co_controller integer NOT NULL,
    no_controller character(50) NOT NULL,
    no_url character(100)
);


ALTER TABLE public.controller OWNER TO tarefa;

--
-- Name: controller_co_controller_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE controller_co_controller_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.controller_co_controller_seq OWNER TO tarefa;

--
-- Name: controller_co_controller_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE controller_co_controller_seq OWNED BY controller.co_controller;


--
-- Name: controller_co_controller_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('controller_co_controller_seq', 1, false);


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
    st_nao_exibir boolean DEFAULT false,
    no_icon character varying(100)
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
-- Name: menu_co_menu_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('menu_co_menu_seq', 16, true);


--
-- Name: modulo; Type: TABLE; Schema: public; Owner: admin; Tablespace: 
--

CREATE TABLE modulo (
    no_modulo character varying(50) NOT NULL,
    no_exibicao character varying(100) NOT NULL,
    ds_modulo text,
    nu_ordem integer DEFAULT 0,
    no_icon character varying(200)
);


ALTER TABLE public.modulo OWNER TO admin;

--
-- Name: nivel; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE nivel (
    co_nivel integer NOT NULL,
    no_nivel character(20) NOT NULL
);


ALTER TABLE public.nivel OWNER TO tarefa;

--
-- Name: nivel_co_nivel_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE nivel_co_nivel_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.nivel_co_nivel_seq OWNER TO tarefa;

--
-- Name: nivel_co_nivel_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE nivel_co_nivel_seq OWNED BY nivel.co_nivel;


--
-- Name: nivel_co_nivel_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('nivel_co_nivel_seq', 1, false);


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
-- Name: perfil_co_perfil_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('perfil_co_perfil_seq', 1, false);


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
-- Name: prioridade; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE prioridade (
    co_prioridade integer NOT NULL,
    no_prioridade character(30) NOT NULL
);


ALTER TABLE public.prioridade OWNER TO tarefa;

--
-- Name: prioridade_co_prioridade_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE prioridade_co_prioridade_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.prioridade_co_prioridade_seq OWNER TO tarefa;

--
-- Name: prioridade_co_prioridade_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE prioridade_co_prioridade_seq OWNED BY prioridade.co_prioridade;


--
-- Name: prioridade_co_prioridade_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('prioridade_co_prioridade_seq', 1, false);


--
-- Name: projeto; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE projeto (
    co_projeto integer NOT NULL,
    no_projeto character(20) NOT NULL
);


ALTER TABLE public.projeto OWNER TO tarefa;

--
-- Name: projeto_co_projeto_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE projeto_co_projeto_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.projeto_co_projeto_seq OWNER TO tarefa;

--
-- Name: projeto_co_projeto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE projeto_co_projeto_seq OWNED BY projeto.co_projeto;


--
-- Name: projeto_co_projeto_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('projeto_co_projeto_seq', 1, false);


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
-- Name: recurso_co_recurso_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('recurso_co_recurso_seq', 18, true);


--
-- Name: tarefa; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE tarefa (
    co_tarefa integer NOT NULL,
    no_tarefa character(50) NOT NULL,
    dc_tarefa character(300) NOT NULL,
    dt_inicio date NOT NULL,
    dt_previsao date NOT NULL,
    dt_fim date,
    co_categoria integer NOT NULL,
    co_nivel integer NOT NULL,
    co_projeto integer NOT NULL,
    co_prioridade integer NOT NULL
);


ALTER TABLE public.tarefa OWNER TO tarefa;

--
-- Name: tarefa_action; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE tarefa_action (
    co_tarefa integer NOT NULL,
    co_action integer NOT NULL
);


ALTER TABLE public.tarefa_action OWNER TO tarefa;

--
-- Name: tarefa_co_tarefa_seq; Type: SEQUENCE; Schema: public; Owner: tarefa
--

CREATE SEQUENCE tarefa_co_tarefa_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.tarefa_co_tarefa_seq OWNER TO tarefa;

--
-- Name: tarefa_co_tarefa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: tarefa
--

ALTER SEQUENCE tarefa_co_tarefa_seq OWNED BY tarefa.co_tarefa;


--
-- Name: tarefa_co_tarefa_seq; Type: SEQUENCE SET; Schema: public; Owner: tarefa
--

SELECT pg_catalog.setval('tarefa_co_tarefa_seq', 1, false);


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
-- Name: usuario_co_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('usuario_co_usuario_seq', 10, true);


--
-- Name: usuario_tarefa; Type: TABLE; Schema: public; Owner: tarefa; Tablespace: 
--

CREATE TABLE usuario_tarefa (
    co_usuario integer NOT NULL,
    co_tarefa integer NOT NULL
);


ALTER TABLE public.usuario_tarefa OWNER TO tarefa;

--
-- Name: co_action; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY action ALTER COLUMN co_action SET DEFAULT nextval('action_co_action_seq'::regclass);


--
-- Name: co_categoria; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY categoria ALTER COLUMN co_categoria SET DEFAULT nextval('categoria_co_categoria_seq'::regclass);


--
-- Name: co_controller; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY controller ALTER COLUMN co_controller SET DEFAULT nextval('controller_co_controller_seq'::regclass);


--
-- Name: co_menu; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY menu ALTER COLUMN co_menu SET DEFAULT nextval('menu_co_menu_seq'::regclass);


--
-- Name: co_nivel; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY nivel ALTER COLUMN co_nivel SET DEFAULT nextval('nivel_co_nivel_seq'::regclass);


--
-- Name: co_perfil; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY perfil ALTER COLUMN co_perfil SET DEFAULT nextval('perfil_co_perfil_seq'::regclass);


--
-- Name: co_prioridade; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY prioridade ALTER COLUMN co_prioridade SET DEFAULT nextval('prioridade_co_prioridade_seq'::regclass);


--
-- Name: co_projeto; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY projeto ALTER COLUMN co_projeto SET DEFAULT nextval('projeto_co_projeto_seq'::regclass);


--
-- Name: co_recurso; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY recurso ALTER COLUMN co_recurso SET DEFAULT nextval('recurso_co_recurso_seq'::regclass);


--
-- Name: co_tarefa; Type: DEFAULT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY tarefa ALTER COLUMN co_tarefa SET DEFAULT nextval('tarefa_co_tarefa_seq'::regclass);


--
-- Name: co_usuario; Type: DEFAULT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario ALTER COLUMN co_usuario SET DEFAULT nextval('usuario_co_usuario_seq'::regclass);


--
-- Data for Name: action; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: controller; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: menu; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO menu VALUES (2, 'DEFAULT', 'Principal', NULL, '/default/index', 1, true, '2013-04-25 16:28:35.009765', NULL, NULL, NULL, true, NULL);
INSERT INTO menu VALUES (16, 'TAREFA', 'Cadastro de tarefa', NULL, '/tarefa/index/cadastro', 2, true, '2013-07-04 12:05:12.902936', NULL, NULL, NULL, false, NULL);
INSERT INTO menu VALUES (12, 'MANUTENCAO', 'Listar Usuario', NULL, '/manutencao/usuario/index', 32, false, '2013-05-08 15:21:07.098594', NULL, NULL, NULL, false, NULL);
INSERT INTO menu VALUES (14, 'MANUTENCAO', 'Manutencao Dashboard', NULL, '/manutencao/index', 31, false, '2013-05-08 15:38:37.533026', NULL, NULL, NULL, true, NULL);
INSERT INTO menu VALUES (10, 'MANUTENCAO', 'Cadastro Usuário', NULL, '/manutencao/usuario/adicionar', 1, false, '2013-05-03 15:16:54.235934', NULL, NULL, NULL, false, NULL);
INSERT INTO menu VALUES (11, 'TAREFA', 'Listar de tarefas', NULL, '/tarefa/index', 1, true, '2013-05-08 14:51:43.53937', NULL, NULL, NULL, false, NULL);


--
-- Data for Name: modulo; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO modulo VALUES ('MANUTENCAO', 'Manutenção', 'Manutencao', 3, 'icon-cog');
INSERT INTO modulo VALUES ('DEFAULT', 'Principal', 'Principal', 1, 'icon-home');
INSERT INTO modulo VALUES ('TAREFA', 'Tarefas', 'Tarefas ', 2, 'icon-signal');


--
-- Data for Name: nivel; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: perfil; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO perfil VALUES (1, 'Administrador', 'Administrador', true);
INSERT INTO perfil VALUES (0, 'Visitante', 'Visitante', true);


--
-- Data for Name: permissao; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO permissao VALUES (0, NULL, NULL, 3, true, '2013-05-03 15:57:18.899631-03', 1);
INSERT INTO permissao VALUES (0, NULL, NULL, 4, true, '2013-05-03 15:57:18.899631-03', 1);
INSERT INTO permissao VALUES (1, NULL, NULL, 3, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 4, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 5, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 7, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 16, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 6, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 17, true, '2013-05-08 15:42:12.028424-03', NULL);
INSERT INTO permissao VALUES (1, NULL, NULL, 18, true, '2013-07-04 12:22:17.624105-03', NULL);


--
-- Data for Name: prioridade; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: projeto; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: recurso; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO recurso VALUES (3, 'Modulo Padrao', '/default/index', 1, '2013-05-03 15:57:18.899631', 1, NULL, NULL);
INSERT INTO recurso VALUES (4, 'Modulo Error', '/default/error', 1, '2013-05-03 15:57:18.899631', 1, NULL, NULL);
INSERT INTO recurso VALUES (5, 'Acesso Total', '/*/*/*', 1, '2013-05-03 15:57:18.93522', 1, NULL, NULL);
INSERT INTO recurso VALUES (16, 'Modulo Manutencao Cadastrar Usuario', '/manutencao/usuario/adicionar', NULL, '2013-05-08 15:21:28.834204', NULL, NULL, NULL);
INSERT INTO recurso VALUES (6, 'Modulo Manutencao Lista Usuario', '/manutencao/usuario/index', 1, '2013-05-03 15:57:18.93522', 1, NULL, NULL);
INSERT INTO recurso VALUES (17, 'Modulo Manutencao Dashboard', '/manutencao/index', NULL, '2013-05-08 15:40:19.447137', NULL, NULL, NULL);
INSERT INTO recurso VALUES (7, 'Modulo tarefa Home', '/tarefa/index', 1, '2013-05-03 15:57:18.964797', 1, NULL, NULL);
INSERT INTO recurso VALUES (18, 'Modulo tarefa Cadastro', '/tarefa/index/cadastro', 1, '2013-07-04 12:21:55.911941', NULL, NULL, NULL);


--
-- Data for Name: tarefa; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: tarefa_action; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO usuario VALUES (-1, NULL, '123', 'Visitante', 'Visitante', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (1, NULL, '123', 'Sistema', 'Sistema', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (3, '12345678911', 'dev', 'Desenvolvedor', 'dev', '2013-07-04 12:17:53', 'fabio@fabiofarias.com.br', 1, NULL);


--
-- Data for Name: usuario_tarefa; Type: TABLE DATA; Schema: public; Owner: tarefa
--



--
-- Name: action_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY action
    ADD CONSTRAINT action_pkey PRIMARY KEY (co_action);


--
-- Name: categoria_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (co_categoria);


--
-- Name: controller_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY controller
    ADD CONSTRAINT controller_pkey PRIMARY KEY (co_controller);


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
-- Name: nivel_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY nivel
    ADD CONSTRAINT nivel_pkey PRIMARY KEY (co_nivel);


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
-- Name: prioridade_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY prioridade
    ADD CONSTRAINT prioridade_pkey PRIMARY KEY (co_prioridade);


--
-- Name: projeto_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY projeto
    ADD CONSTRAINT projeto_pkey PRIMARY KEY (co_projeto);


--
-- Name: recurso_pkey; Type: CONSTRAINT; Schema: public; Owner: admin; Tablespace: 
--

ALTER TABLE ONLY recurso
    ADD CONSTRAINT recurso_pkey PRIMARY KEY (co_recurso);


--
-- Name: tarefa_pkey; Type: CONSTRAINT; Schema: public; Owner: tarefa; Tablespace: 
--

ALTER TABLE ONLY tarefa
    ADD CONSTRAINT tarefa_pkey PRIMARY KEY (co_tarefa);


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
-- Name: tarefa_action_co_action_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY tarefa_action
    ADD CONSTRAINT tarefa_action_co_action_fkey FOREIGN KEY (co_action) REFERENCES action(co_action);


--
-- Name: tarefa_action_co_tarefa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY tarefa_action
    ADD CONSTRAINT tarefa_action_co_tarefa_fkey FOREIGN KEY (co_tarefa) REFERENCES tarefa(co_tarefa);


--
-- Name: user_co_perfil_fkey; Type: FK CONSTRAINT; Schema: public; Owner: admin
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT user_co_perfil_fkey FOREIGN KEY (co_perfil) REFERENCES perfil(co_perfil) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: usuario_tarefa_co_tarefa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY usuario_tarefa
    ADD CONSTRAINT usuario_tarefa_co_tarefa_fkey FOREIGN KEY (co_tarefa) REFERENCES tarefa(co_tarefa);


--
-- Name: usuario_tarefa_co_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: tarefa
--

ALTER TABLE ONLY usuario_tarefa
    ADD CONSTRAINT usuario_tarefa_co_usuario_fkey FOREIGN KEY (co_usuario) REFERENCES usuario(co_usuario);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: action; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE action FROM PUBLIC;
REVOKE ALL ON TABLE action FROM tarefa;
GRANT ALL ON TABLE action TO tarefa;
GRANT ALL ON TABLE action TO PUBLIC;


--
-- Name: categoria; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE categoria FROM PUBLIC;
REVOKE ALL ON TABLE categoria FROM tarefa;
GRANT ALL ON TABLE categoria TO tarefa;
GRANT ALL ON TABLE categoria TO PUBLIC;


--
-- Name: controller; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE controller FROM PUBLIC;
REVOKE ALL ON TABLE controller FROM tarefa;
GRANT ALL ON TABLE controller TO tarefa;
GRANT ALL ON TABLE controller TO PUBLIC;


--
-- Name: nivel; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE nivel FROM PUBLIC;
REVOKE ALL ON TABLE nivel FROM tarefa;
GRANT ALL ON TABLE nivel TO tarefa;
GRANT ALL ON TABLE nivel TO PUBLIC;


--
-- Name: prioridade; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE prioridade FROM PUBLIC;
REVOKE ALL ON TABLE prioridade FROM tarefa;
GRANT ALL ON TABLE prioridade TO tarefa;
GRANT ALL ON TABLE prioridade TO PUBLIC;


--
-- Name: projeto; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE projeto FROM PUBLIC;
REVOKE ALL ON TABLE projeto FROM tarefa;
GRANT ALL ON TABLE projeto TO tarefa;
GRANT ALL ON TABLE projeto TO PUBLIC;


--
-- Name: tarefa; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE tarefa FROM PUBLIC;
REVOKE ALL ON TABLE tarefa FROM tarefa;
GRANT ALL ON TABLE tarefa TO tarefa;
GRANT ALL ON TABLE tarefa TO PUBLIC;


--
-- Name: tarefa_action; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE tarefa_action FROM PUBLIC;
REVOKE ALL ON TABLE tarefa_action FROM tarefa;
GRANT ALL ON TABLE tarefa_action TO tarefa;
GRANT ALL ON TABLE tarefa_action TO PUBLIC;


--
-- Name: usuario_tarefa; Type: ACL; Schema: public; Owner: tarefa
--

REVOKE ALL ON TABLE usuario_tarefa FROM PUBLIC;
REVOKE ALL ON TABLE usuario_tarefa FROM tarefa;
GRANT ALL ON TABLE usuario_tarefa TO tarefa;
GRANT ALL ON TABLE usuario_tarefa TO PUBLIC;


--
-- PostgreSQL database dump complete
--

