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
-- Name: dicionario_dados_co_dicionario_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('dicionario_dados_co_dicionario_seq', 41, true);


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
-- Name: eas_conexao_co_conexao_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('eas_conexao_co_conexao_seq', 2, true);


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
-- Name: menu_co_menu_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('menu_co_menu_seq', 14, true);


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

SELECT pg_catalog.setval('recurso_co_recurso_seq', 17, true);


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
-- Name: relatorio_co_relatorio_seq; Type: SEQUENCE SET; Schema: public; Owner: admin
--

SELECT pg_catalog.setval('relatorio_co_relatorio_seq', 14, true);


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
-- Data for Name: dicionario_dados; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO dicionario_dados VALUES (19, 8, NULL, 'Tipo de Consulta', 4);
INSERT INTO dicionario_dados VALUES (1, 12, NULL, 'Nome da Agenda', 3);
INSERT INTO dicionario_dados VALUES (2, 12, NULL, 'Nome do Profissional', 3);
INSERT INTO dicionario_dados VALUES (3, 12, NULL, 'Quantidade de Atendimentos de Primeira Vez', 3);
INSERT INTO dicionario_dados VALUES (4, 12, NULL, 'Quantidade de Atendimentos de Retorno', 3);
INSERT INTO dicionario_dados VALUES (5, 12, NULL, 'Quantidade de Encaminhamentos para Outras Clínicas', 3);
INSERT INTO dicionario_dados VALUES (30, 10, NULL, 'Sub-total da Clínica', 4);
INSERT INTO dicionario_dados VALUES (29, 10, NULL, 'Quantidade de Atendimentos Consolidados Deste Tipo de Consulta', 4);
INSERT INTO dicionario_dados VALUES (28, 10, NULL, 'Descrição do Tipo de Consulta', 4);
INSERT INTO dicionario_dados VALUES (27, 10, NULL, 'Código do Tipo de Consulta', 4);
INSERT INTO dicionario_dados VALUES (6, 12, NULL, 'Quantidade de Atendimentos fora de agendamento', 3);
INSERT INTO dicionario_dados VALUES (21, 9, NULL, 'Código do Tipo de Consulta', 1);
INSERT INTO dicionario_dados VALUES (22, 9, NULL, 'Descrição do Tipo da consulta', 1);
INSERT INTO dicionario_dados VALUES (26, 10, NULL, 'Descrição da Especialidade', 4);
INSERT INTO dicionario_dados VALUES (23, 9, NULL, 'Quantidade de Atendimentos Consolidados Deste Tipo de Consulta', 1);
INSERT INTO dicionario_dados VALUES (24, 9, NULL, 'Total de Atendimentos da Clínica', 1);
INSERT INTO dicionario_dados VALUES (25, 10, NULL, 'Código da Especialidade', 1);
INSERT INTO dicionario_dados VALUES (8, 7, 'EIR001_NAME', 'Setor do Usuário', 7);
INSERT INTO dicionario_dados VALUES (9, 7, 'EIR001_NAME', 'Login do Usuário', 7);
INSERT INTO dicionario_dados VALUES (10, 7, 'EIR001_NAME', 'Nome do Profissional', 7);
INSERT INTO dicionario_dados VALUES (32, 11, NULL, 'Código ID da Agenda', 5);
INSERT INTO dicionario_dados VALUES (31, 10, NULL, 'Total de Atendimentos no Período', 4);
INSERT INTO dicionario_dados VALUES (33, 11, NULL, 'Descrição da Agenda', 5);
INSERT INTO dicionario_dados VALUES (35, 11, NULL, 'Nome do Profissional', 5);
INSERT INTO dicionario_dados VALUES (11, 7, 'EIR001_NAME', 'Função Cadastrada do login', 7);
INSERT INTO dicionario_dados VALUES (34, 11, NULL, 'Nº de Matrícula do Profissional', 5);
INSERT INTO dicionario_dados VALUES (37, 11, NULL, 'horário de Término da Escala', 5);
INSERT INTO dicionario_dados VALUES (36, 11, NULL, 'Horário de início da Escala', 5);
INSERT INTO dicionario_dados VALUES (38, 11, NULL, 'Data Início Vigência da Escala', 5);
INSERT INTO dicionario_dados VALUES (12, 7, 'EIR001_NAME', 'Data da Abertura do Prontuário', 7);
INSERT INTO dicionario_dados VALUES (13, 7, 'EIR001_NAME', 'Hora da Abertura do Prontuário', 7);
INSERT INTO dicionario_dados VALUES (14, 7, 'EIR001_NAME', 'Nº do Prontuário', 7);
INSERT INTO dicionario_dados VALUES (15, 7, 'EIR001_NAME', 'Nome do Paciente no Prontuário', 7);
INSERT INTO dicionario_dados VALUES (39, 11, NULL, 'Data Fim Vigência da Escala', 5);
INSERT INTO dicionario_dados VALUES (40, 11, NULL, 'Tipo de Atendimento', 5);
INSERT INTO dicionario_dados VALUES (41, 11, NULL, 'Total de Pacientes Pertencentes Àquele Profissional/Escala', 5);
INSERT INTO dicionario_dados VALUES (16, 8, NULL, 'Nome do Profissional', 1);
INSERT INTO dicionario_dados VALUES (17, 8, NULL, 'Quantidade de Atendimentos', 2);
INSERT INTO dicionario_dados VALUES (18, 8, NULL, 'Código do Tipo de Consulta', 3);


--
-- Data for Name: eas; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO eas VALUES (2, NULL, NULL, NULL, NULL, NULL, 'HFI', NULL, NULL, NULL);
INSERT INTO eas VALUES (1, true, NULL, NULL, NULL, NULL, 'HFL', NULL, NULL, NULL);


--
-- Data for Name: eas_conexao; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO eas_conexao VALUES (2, 1, NULL, true, '(DESCRIPTION=(ADDRESS=(PROTOCOL = TCP)(HOST = srvorahfl1-vip.hgl.gov)(PORT = 1521))(ADDRESS = (PROTOCOL = TCP)(HOST = srvorahfl2-vip.hgl.gov)(PORT = 1521))(LOAD_BALANCE = yes)(CONNECT_DATA=(SERVER = DEDICATED)(SERVICE_NAME=rjhfl)))', 'AL32UTF8', 'pmweb_hfl_cons', 'senha', 'PROD');
INSERT INTO eas_conexao VALUES (1, 1, true, true, '(DESCRIPTION=(ADDRESS=(PROTOCOL = TCP)(HOST =srvorarj1.datasus.gov)(PORT = 1808))(CONNECT_DATA=(SERVER = DEDICATED)(SERVICE_NAME=rjpo1.datasus.gov)))', 'AL32UTF8', 'pmweb_hfl_bi_cons', 'senha', 'BI');


--
-- Data for Name: menu; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Data for Name: modulo; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO modulo VALUES ('DEFAULT', 'Principal', 'Principal', 1);
INSERT INTO modulo VALUES ('CONSULTA', 'Consulta', 'Consulta Relatórios', 2);
INSERT INTO modulo VALUES ('MANUTENCAO', 'Manutenção', 'Manutencao', 3);


--
-- Data for Name: perfil; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO perfil VALUES (1, 'Administrador', 'Administrador', true);
INSERT INTO perfil VALUES (0, 'Visitante', 'Visitante', true);
INSERT INTO perfil VALUES (2, 'DGH', 'DGH', true);
INSERT INTO perfil VALUES (3, 'Direcao', 'Direção', true);


--
-- Data for Name: permissao; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Data for Name: recurso; Type: TABLE DATA; Schema: public; Owner: admin
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
-- Data for Name: relatorio; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO relatorio VALUES (1, 'Profissional', 3, 'select 
                  sys009.sys009_name,
       sys009.sys009_sex,
       sys009.sys009_mobile_phone,
       sys009.sys009_comercial_phone,
       sys009.sys009_address,
       sys009.sys009_address_number,
       sys009.sys009_address_complement,
       sys009.sys009_zip_code,
       sys009.sys009_nationality,
       sys009.sys009_agency_registration,
       sys008.sys008_agency_name,
       sys009.sys009_document_number,
       sys008.sys008_description,
       sys009.sys009_cns,
       replace(fn_concatena(''select distinct(sys012.sys012_description)
                     from sys013_professinal_spec sys013
                     join sys012_physician_speciality sys012
                          on sys012.sys012_physician_spec_id = sys013.sys012_physician_spec_id
                     where sys013.sys009_professional_id = '' ||
                    sys009.sys009_professional_id),'';'','','') especialidades,
       sus003.sus003_description,
       sys010.sys010_user_name,
       sys018.sys018_name,
       case
         when sys009.sys009_is_resident = ''F'' then
          ''Nao residente''
         when sys009.sys009_is_resident = ''T'' then
          ''Residente''
         else
          ''Outros''
       end as sys009_is_resident,
      case
         when sys009.sys009_enabled = ''T'' then
          ''Ativo''
         when sys009.sys009_enabled = ''F'' then
          ''Inativo''
         else
          ''Outros''
       end as STATUS
                    
  from sys009_professional sys009
 inner join sys008_professional_type sys008 on sys008.sys008_professional_type_id =
                                               sys009.sys008_professional_type_id
 inner join sys010_user sys010 on sys010.sys009_professional_id =
                                  sys009.sys009_professional_id
  left join sys043_professional_board sys043 on sys009.sys043_professional_board_id =
                                                sys043.sys043_professional_board_id
  left join sus003_cbor sus003 on sus003.sus003_cbor_id =
                                  sys009.sus003_cbor_id
  left join sys019_user_group sys019 on sys019.sys010_user_id =
                                        sys010.sys010_user_id
  left join sys018_group sys018 on sys018.sys018_group_id =
                                   sys019.sys018_group_id



        #FILTRO#', 'relatorio-profissional', 'select count(sys010.SYS010_USER_NAME) TOTAL
from 
sys009_professional sys009 
inner join sys008_professional_type sys008 on sys008.sys008_professional_type_id = sys009.sys008_professional_type_id 
left join sys013_professinal_spec sys013 on sys013.sys009_professional_id = sys009.sys009_professional_id 
left join sys012_physician_speciality sys012 on sys012.sys012_physician_spec_id = sys013.sys012_physician_spec_id 
inner join sys010_user sys010 on sys010.sys009_professional_id = sys009.sys009_professional_id 
left join sys043_PROFESSIONAL_BOARD sys043 on sys009.sys043_PROFESSIONAL_BOARD_ID = sys043.sys043_PROFESSIONAL_BOARD_ID 
left join sus003_cbor sus003 on sus003.sus003_cbor_id = sys009.sus003_cbor_id 
left join sys019_user_group sys019 on sys019.sys010_user_id = sys010.sys010_user_id 
left join sys018_group sys018 on sys018.sys018_group_id = sys019.sys018_group_id 


        #FILTRO#', 1);
INSERT INTO relatorio VALUES (3, 'Historico de Leitos', 3, 'SELECT adt005.adt005_bed_code LEITO, 
            adt004.adt004_description ENFERMARIA, 
            to_char(adt010.adt010_date,''DD/YY/YYYY'') DATA, 
            to_char(adt010.adt010_date,''HH:MI'') HORA,
            sys002.sys002_name UNIDADE,
decode (adt010.adt010_new_status, ''O'', ''OCUPADO'',''B'',''BLOQUEADO'', ''L'',''LIVRE'',''R'',''RESERVADO'') STATUS
       from adt010_bed_status_change adt010
            inner join adt005_bed adt005 on adt010.adt005_bed_id = adt005.adt005_bed_id
            inner join adt004_bedroom adt004 on adt005.adt004_bedroom_id = adt004.adt004_bedroom_id
                  and adt005.sys002_unit_id = adt004.sys002_unit_id
            inner join sys002_unit sys002 on adt005.sys002_unit_id = sys002.sys002_unit_id
     
        #FILTRO#
        
        order by 3 desc', 'relatorio-historico-leito', NULL, 3);
INSERT INTO relatorio VALUES (2, 'Materiais e Medicamentos', 3, 'select to_char(adm082.adm082_code) AS CAT_MAT,
       to_char(adm082.adm082_description) AS DESCRICAO,
       to_char(adm082.adm082_dosage || '' | '' || adm082.adm082_dosage_unit) AS DOSAGEM,
       to_char(adm082.adm082_use_quantity || '' | '' || adm094_01.adm094_description) AS DOSE_DE_USO,
       to_char(ADM089.ADM089_DESCRIPTION) AS APRESENTACAO,
       to_char(ADM089.ADM089_USE_QUANTITY) AS QUANT_DOSE_USO,
       to_char(ADM089.ADM089_FRACTIONED_QUANTITY) AS QUANT_FRAC_APRESENT,
       to_char(ADM094.ADM094_DESCRIPTION) AS FORMA_FARMACEUTICA,
       to_char(DECODE(STO005.STO005_FRACTIONED,''T'',''SIM'',''F'',''NAO'')) AS FRACIONADO,
       to_char(DECODE(sto005.sto005_fractioned_request, ''T'', ''SIM'', ''F'', ''NAO'')) AS SOLICITA_FAR,
       to_char(DECODE(adm082.adm082_type, 1, ''MED'', 2, ''MAT'', 3, ''MED'', 4, ''ALM'', 7, ''MED'' )) as TIPO,
       case when adm082.ADM082_INACTIVED = ''T'' then
          ''Ativo''
         when adm082.ADM082_INACTIVED = ''F'' then
          ''Inativo''
       end as STATUS 
        from adm082_product adm082
        full outer join sto005_product_stock_config sto005
            on sto005.adm082_product_id = adm082.adm082_product_id
        full outer join adm089_product_presentation adm089
            on sto005.adm089_product_presentation_id =
            adm089.adm089_product_presentation_id
        full outer join adm094_use_unit adm094
            on adm089.adm094_use_unit_id = adm094.adm094_use_unit_id
        full outer join adm094_use_unit adm094_01
            on adm082.adm094_use_unit_id = adm094_01.adm094_use_unit_id
        full outer join sto007_product_sub_group sto007
            on adm082.sto007_product_sub_group_id = sto007.sto007_product_sub_group_id
       
       #FILTRO#
       
        union ALL
        select to_char(adm082.adm082_code) AS CAT_MAT,
            to_char(adm082.adm082_description) AS DESCRICAO,
            to_char(adm082.adm082_dosage || '' | '' || adm082.adm082_dosage_unit) AS DOSAGEM,
            to_char(adm082.adm082_use_quantity) AS DOSE_DE_USO,
            to_char('''') AS APRESENTACAO,
            to_char('''') AS QUANT_DOSE_USO,
            to_char('''') AS QUANT_FRAC_APRESENT,
            to_char('''') AS FORMA_FARMACEUTICA,
            to_char('''') AS FRACIONADO,
            to_char('''') AS SOLICITA_FAR,
            to_char(DECODE(adm082.adm082_type, 1, ''MED'', 2, ''MAT'', 3, ''MED'', 4, ''ALM'', 7, ''MED'' )) as TIPO,
             case when adm082.ADM082_INACTIVED = ''T'' then
          ''Ativo''
         when adm082.ADM082_INACTIVED = ''F'' then
          ''Inativo''
       end as STATUS 
        from adm082_product adm082
        full join sto005_product_stock_config sto005
            on sto005.adm082_product_id = adm082.adm082_product_id
        left join adm094_use_unit adm094_01
            on adm082.adm094_use_unit_id = adm094_01.adm094_use_unit_id
      
        
        #FILTRO#
        
        
        order by tipo, descricao
   
        ', 'relatorio-cat-mat', NULL, 2);
INSERT INTO relatorio VALUES (8, 'Quantidade de Atendimentos Médicos por Clínica', 6, NULL, 'relatorio-quantidade-atendimento-medico-clinica', NULL, 1);
INSERT INTO relatorio VALUES (6, 'Capacidade Ambulatorial', 6, 'select distinct
trim(sys012.sys012_description) "Especialidade", sch001.sch001_title "Agenda", sys009.sys009_name "Profissional",
(fn_concatena(''select count(*) qtd
        from sch032_interval_details_clas sch032
        inner join sch023_interval_details sch023 on to_char(sch023.sch006_interval_id) = ''|| sch006.sch006_interval_id ||''
              and sch032.sch023_interval_detail_id = sch023.sch023_interval_detail_id
        inner join sch015_time_classification sch015 on sch015.sch015_time_classification_id = sch032.sch015_time_classification_id
        where sch032.sch015_time_classification_id = 2
'')) "N Primeira vez",
(fn_concatena(''select count(*) qtd
        from sch032_interval_details_clas sch032
        inner join sch023_interval_details sch023 on to_char(sch023.sch006_interval_id) = ''|| sch006.sch006_interval_id ||''
              and sch032.sch023_interval_detail_id = sch023.sch023_interval_detail_id
        inner join sch015_time_classification sch015 on sch015.sch015_time_classification_id = sch032.sch015_time_classification_id
        where sch032.sch015_time_classification_id = 3
'')) "N Retorno",
case when sch021.sch021_al_fit_bt_ini_fin_tm = ''T'' then sch021.sch021_al_fit_bt_ini_fin_tm_qt
     else 0
end "N Extras",
to_char(sch006.sch006_start_time,''hh24:mi'') "Hora inicio",
to_char(sch006.sch006_end_time,''hh24:mi'') "Hora fim",
decode(sch006.sch006_weekday,1,''S'',''N'') "Seg",
decode(sch006.sch006_weekday,2,''S'',''N'') "Ter",
decode(sch006.sch006_weekday,3,''S'',''N'') "Qua",
decode(sch006.sch006_weekday,4,''S'',''N'') "Qui",
decode(sch006.sch006_weekday,5,''S'',''N'') "Sex",
to_char(sch006.sch006_validity_begin,''dd/mm/yyyy'') "Data inicio",
to_char(sch006.sch006_validity_end,''dd/mm/yyyy'') "Data fim"

from sch002_task_structure sch002
     inner join sch001_schedule sch001 on sch001.sch001_schedule_id = sch002.sch001_schedule_id
     inner join sch006_interval sch006 on sch006.sch001_schedule_id = sch001.sch001_schedule_id
           and sch006.sch002_task_structure_id = sch002.sch002_task_structure_id
     inner join sys009_professional sys009 on sys009.sys009_professional_id = sch006.sch006_member_id
     inner join sch021_schedule_details sch021 on sch021.sch001_schedule_id = sch001.sch001_schedule_id
     inner join sch023_interval_details sch023 on sch023.sch006_interval_id = sch006.sch006_interval_id
     inner join sch032_interval_details_clas sch032 on sch032.sch023_interval_detail_id = sch023.sch023_interval_detail_id
     inner join sch015_time_classification sch015 on sch015.sch015_time_classification_id = sch032.sch015_time_classification_id
     left join sch002_task_structure sch002_spec on sch002_spec.sch001_schedule_id = sch001.sch001_schedule_id
          and sch002_spec.sch002_entity_type = 10
     left join sch024_in_entity_item sch024 on sch024.sch002_task_structure_id = sch002_spec.sch002_task_structure_id
     left join sys012_physician_speciality sys012 on sys012.sys012_physician_spec_id = sch024.sch024_member_id
     inner join sys013_professinal_spec sys013 on sys013.sys009_professional_id = sys009.sys009_professional_id
          and sys012.sys012_physician_spec_id = sys013.sys012_physician_spec_id

 #FILTRO#
 ', 'relatorio-capacidade-ambulatorial', NULL, 6);
INSERT INTO relatorio VALUES (7, 'Log de Abertura de Prontuário', 6, NULL, 'relatorio-log-abertura-prontuario', NULL, 7);
INSERT INTO relatorio VALUES (5, 'Produção Ambulatorial', 6, 'select distinct
trim(sys012.sys012_description) especialidade, 
sch001.sch001_title agenda, 
sys009.sys009_name profissional, 
sch010.sch010_description status,
to_char (sch003.sch003_start,''dd/mm/yyyy'') data, 
to_char(sch003.sch003_start,''hh24:mi'') hora

from sch002_task_structure sch002
     inner join sch001_schedule sch001 on sch001.sch001_schedule_id = sch002.sch001_schedule_id
     inner join sch003_lock sch003 on sch003.sch001_schedule_id = sch001.sch001_schedule_id
     inner join sch004_lock_member sch004 on sch004.sch002_task_structure_id = sch002.sch002_task_structure_id
           and sch004.sch003_lock_id = sch003.sch003_lock_id
     inner join sch006_interval sch006 on sch006.sch001_schedule_id = sch001.sch001_schedule_id
           and sch006.sch002_task_structure_id = sch002.sch002_task_structure_id
     inner join sch023_interval_details sch023 on sch023.sch006_interval_id = sch006.sch006_interval_id
     inner join sch010_lock_status sch010 on sch010.sch010_lock_status_id = sch003.sch010_lock_status_id
     inner join sys009_professional sys009 on sys009.sys009_professional_id = sch006.sch006_member_id
           and sys009.sys009_professional_id = sch004.sch004_member_id
     left join sch002_task_structure sch002_spec on sch002_spec.sch001_schedule_id = sch001.sch001_schedule_id
          and sch002_spec.sch002_entity_type = 10
     left join sch024_in_entity_item sch024 on sch024.sch002_task_structure_id = sch002_spec.sch002_task_structure_id
     left join sys012_physician_speciality sys012 on sys012.sys012_physician_spec_id = sch024.sch024_member_id


 #FILTRO#', 'relatorio-producao-ambulatorial', NULL, 8);
INSERT INTO relatorio VALUES (9, 'Quantidade de Atendimentos Medicos por Clínica consolidados', 6, NULL, 'relatorio-quantidade-atendimento-medico-clinica-consolidado', NULL, 4);
INSERT INTO relatorio VALUES (10, 'Quantidade de Atendimentos Médicos por Clínica Procedimento', 6, NULL, 'relatorio-quantidade-atendimento-medico-clinica-procedimento', NULL, 5);
INSERT INTO relatorio VALUES (13, 'Relatorio de internação', 4, NULL, 'relatorio-internacao', NULL, 0);
INSERT INTO relatorio VALUES (14, 'Tempo de Permanencia', 7, NULL, 'tempo-permanencia', NULL, 0);
INSERT INTO relatorio VALUES (11, 'Capacidade Agenda Profissionai', 3, NULL, 'relatorio-capacidade-agenda-profissionais', NULL, 5);
INSERT INTO relatorio VALUES (4, 'Impedimentos Agenda', 6, 'select 
            sys012.sys012_description especialidade, 
            sch001.sch001_title agenda, 
            sys009.sys009_name profissional,
            to_char(sch025.sch025_initial_date,''dd/mm/yyyy'') || '' - '' || to_char(sch025.sch025_initial_time,''hh:mm'') dt_inicio,
            to_char(sch025.sch025_final_date,''dd/mm/yyyy'') || '' - '' || to_char(sch025.sch025_final_time,''hh:mm'') dt_fim,
            sch018.sch018_description tipo_bloqueio 

        from sch025_time_block sch025
            inner join sch001_schedule sch001 on sch001.sch001_schedule_id = sch025.sch001_schedule_id
            inner join sch018_block_schedule sch018 on sch025.sch018_block_schedule_id = sch018.sch018_block_schedule_id
            inner join sch002_task_structure sch002 on sch025.sch002_task_structure_id = sch002.sch002_task_structure_id
            inner join sys009_professional sys009 on sys009.sys009_professional_id = sch025.sch025_member_id
            inner join sys013_professinal_spec sys013 on sys013.sys009_professional_id = sys009.sys009_professional_id
            inner join sys012_physician_speciality sys012 on sys012.sys012_physician_spec_id = sys013.sys013_professional_spec_id

        #FILTRO#', 'relatorio-impedimento-agenda', NULL, 2);
INSERT INTO relatorio VALUES (12, 'Producao Ambulatorial Profissional', 6, NULL, 'relatorio-ambularorial-profissional', NULL, 3);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: admin
--

INSERT INTO usuario VALUES (-1, NULL, '123', 'Visitante', 'Visitante', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (1, NULL, '123', 'Sistema', 'Sistema', NULL, NULL, NULL, NULL);
INSERT INTO usuario VALUES (4, '12345678912', '123', 'CONSUELO', 'consuelo', NULL, 'shell@datasus.gov.br', 1, NULL);
INSERT INTO usuario VALUES (5, '12345678913', '123', 'MARCELO SILVA', 'marcelo', NULL, 'marcelo.pereira@datasus.gov.br', 1, NULL);
INSERT INTO usuario VALUES (9, NULL, '123', 'DGH USUARIO', 'dgh', '2013-05-08 15:44:45', 'dhg@datasus.gov.br', 2, NULL);
INSERT INTO usuario VALUES (3, '12345678911', '123', 'FABIO ROCHA', 'fabio', '2013-06-12 17:30:49', 'fabio@fabiofarias.com.br', 1, NULL);


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

