--
-- PostgreSQL database dump
--

-- Started on 2012-11-29 07:04:42 VET

SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 6 (class 2615 OID 10353615)
-- Name: universidad; Type: SCHEMA; Schema: -; Owner: administrador
--

CREATE SCHEMA universidad;


ALTER SCHEMA universidad OWNER TO administrador;

SET search_path = universidad, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = true;

--
-- TOC entry 1527 (class 1259 OID 10353823)
-- Dependencies: 6
-- Name: calificacion; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE calificacion (
    id integer NOT NULL,
    equipo_materia_id integer,
    persona_id integer,
    nu_calificacion integer
);


ALTER TABLE universidad.calificacion OWNER TO administrador;

--
-- TOC entry 1526 (class 1259 OID 10353821)
-- Dependencies: 6 1527
-- Name: calificacion_co_calificacion_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE calificacion_co_calificacion_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.calificacion_co_calificacion_seq OWNER TO administrador;

--
-- TOC entry 1865 (class 0 OID 0)
-- Dependencies: 1526
-- Name: calificacion_co_calificacion_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE calificacion_co_calificacion_seq OWNED BY calificacion.id;


--
-- TOC entry 1866 (class 0 OID 0)
-- Dependencies: 1526
-- Name: calificacion_co_calificacion_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('calificacion_co_calificacion_seq', 1, false);


--
-- TOC entry 1517 (class 1259 OID 10353768)
-- Dependencies: 6
-- Name: centroformacion; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE centroformacion (
    id integer NOT NULL,
    co_centro_formacion integer,
    tx_centroformacion character varying(100),
    tx_unidadformacion character varying(100),
    localidad_id integer,
    persona_id integer
);


ALTER TABLE universidad.centroformacion OWNER TO administrador;

--
-- TOC entry 1516 (class 1259 OID 10353766)
-- Dependencies: 1517 6
-- Name: centroformacion_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE centroformacion_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.centroformacion_id_seq OWNER TO administrador;

--
-- TOC entry 1867 (class 0 OID 0)
-- Dependencies: 1516
-- Name: centroformacion_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE centroformacion_id_seq OWNED BY centroformacion.id;


--
-- TOC entry 1868 (class 0 OID 0)
-- Dependencies: 1516
-- Name: centroformacion_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('centroformacion_id_seq', 2, true);


--
-- TOC entry 1515 (class 1259 OID 10353760)
-- Dependencies: 6
-- Name: comision; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE comision (
    id integer NOT NULL,
    co_ubt integer,
    persona_id integer,
    persona_idd integer,
    fe_registro date
);


ALTER TABLE universidad.comision OWNER TO administrador;

--
-- TOC entry 1869 (class 0 OID 0)
-- Dependencies: 1515
-- Name: COLUMN comision.persona_id; Type: COMMENT; Schema: universidad; Owner: administrador
--

COMMENT ON COLUMN comision.persona_id IS 'cedula del secretario';


--
-- TOC entry 1870 (class 0 OID 0)
-- Dependencies: 1515
-- Name: COLUMN comision.persona_idd; Type: COMMENT; Schema: universidad; Owner: administrador
--

COMMENT ON COLUMN comision.persona_idd IS 'cedula del coordinador nacional';


--
-- TOC entry 1514 (class 1259 OID 10353758)
-- Dependencies: 1515 6
-- Name: comision_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE comision_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.comision_id_seq OWNER TO administrador;

--
-- TOC entry 1871 (class 0 OID 0)
-- Dependencies: 1514
-- Name: comision_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE comision_id_seq OWNED BY comision.id;


--
-- TOC entry 1872 (class 0 OID 0)
-- Dependencies: 1514
-- Name: comision_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('comision_id_seq', 1, true);


--
-- TOC entry 1511 (class 1259 OID 10353741)
-- Dependencies: 6
-- Name: coordinador_centro; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE coordinador_centro (
    id integer NOT NULL,
    persona_id integer,
    fe_activo date
);


ALTER TABLE universidad.coordinador_centro OWNER TO administrador;

--
-- TOC entry 1510 (class 1259 OID 10353739)
-- Dependencies: 1511 6
-- Name: coordinador_centro_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE coordinador_centro_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.coordinador_centro_id_seq OWNER TO administrador;

--
-- TOC entry 1873 (class 0 OID 0)
-- Dependencies: 1510
-- Name: coordinador_centro_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE coordinador_centro_id_seq OWNED BY coordinador_centro.id;


--
-- TOC entry 1874 (class 0 OID 0)
-- Dependencies: 1510
-- Name: coordinador_centro_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('coordinador_centro_id_seq', 1, true);


--
-- TOC entry 1519 (class 1259 OID 10353779)
-- Dependencies: 6
-- Name: equipo_estudio; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE equipo_estudio (
    id integer NOT NULL,
    co_equipo_estudio integer,
    tx_nombre_equipoestudio character varying(150),
    pnf_id integer,
    centroformacion_id integer,
    tx_turno character varying(50),
    tx_seccion character varying(50)
);


ALTER TABLE universidad.equipo_estudio OWNER TO administrador;

--
-- TOC entry 1518 (class 1259 OID 10353777)
-- Dependencies: 1519 6
-- Name: equipo_estudio_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE equipo_estudio_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.equipo_estudio_id_seq OWNER TO administrador;

--
-- TOC entry 1875 (class 0 OID 0)
-- Dependencies: 1518
-- Name: equipo_estudio_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE equipo_estudio_id_seq OWNED BY equipo_estudio.id;


--
-- TOC entry 1876 (class 0 OID 0)
-- Dependencies: 1518
-- Name: equipo_estudio_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('equipo_estudio_id_seq', 1, true);


--
-- TOC entry 1525 (class 1259 OID 10353812)
-- Dependencies: 6
-- Name: equipo_materias; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE equipo_materias (
    id integer NOT NULL,
    materias_id integer,
    facilitador_id integer,
    fe_cierre date,
    tx_periodo character varying(30),
    tx_observacion text,
    equipo_estudio_id integer
);


ALTER TABLE universidad.equipo_materias OWNER TO administrador;

--
-- TOC entry 1524 (class 1259 OID 10353810)
-- Dependencies: 6 1525
-- Name: equipo_materia_co_equipo_materia_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE equipo_materia_co_equipo_materia_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.equipo_materia_co_equipo_materia_seq OWNER TO administrador;

--
-- TOC entry 1877 (class 0 OID 0)
-- Dependencies: 1524
-- Name: equipo_materia_co_equipo_materia_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE equipo_materia_co_equipo_materia_seq OWNED BY equipo_materias.id;


--
-- TOC entry 1878 (class 0 OID 0)
-- Dependencies: 1524
-- Name: equipo_materia_co_equipo_materia_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('equipo_materia_co_equipo_materia_seq', 1, true);


--
-- TOC entry 1513 (class 1259 OID 10353749)
-- Dependencies: 6
-- Name: facilitador; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE facilitador (
    id integer NOT NULL,
    persona_id integer,
    tx_agresadouniversidad character varying(70),
    tx_profesion character varying(70),
    fe_grado date,
    tx_postgrado character varying(150)
);


ALTER TABLE universidad.facilitador OWNER TO administrador;

--
-- TOC entry 1512 (class 1259 OID 10353747)
-- Dependencies: 1513 6
-- Name: facilitador_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE facilitador_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.facilitador_id_seq OWNER TO administrador;

--
-- TOC entry 1879 (class 0 OID 0)
-- Dependencies: 1512
-- Name: facilitador_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE facilitador_id_seq OWNED BY facilitador.id;


--
-- TOC entry 1880 (class 0 OID 0)
-- Dependencies: 1512
-- Name: facilitador_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('facilitador_id_seq', 1, true);


--
-- TOC entry 1507 (class 1259 OID 10353697)
-- Dependencies: 6
-- Name: localidad; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE localidad (
    id integer NOT NULL,
    tx_estado character varying(50),
    tx_municipio character varying(50),
    tx_ciudad character varying(50),
    tx_sector character varying(50)
);


ALTER TABLE universidad.localidad OWNER TO administrador;

--
-- TOC entry 1506 (class 1259 OID 10353695)
-- Dependencies: 6 1507
-- Name: localidad_co_localidad_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE localidad_co_localidad_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.localidad_co_localidad_seq OWNER TO administrador;

--
-- TOC entry 1881 (class 0 OID 0)
-- Dependencies: 1506
-- Name: localidad_co_localidad_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE localidad_co_localidad_seq OWNED BY localidad.id;


--
-- TOC entry 1882 (class 0 OID 0)
-- Dependencies: 1506
-- Name: localidad_co_localidad_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('localidad_co_localidad_seq', 2, true);


--
-- TOC entry 1523 (class 1259 OID 10353801)
-- Dependencies: 6
-- Name: materias; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE materias (
    id integer NOT NULL,
    co_materia integer,
    tx_unidad_curricular character varying(50),
    nu_trayecto integer,
    nu_tramo integer,
    nu_uc integer,
    pnf_id integer
);


ALTER TABLE universidad.materias OWNER TO administrador;

--
-- TOC entry 1522 (class 1259 OID 10353799)
-- Dependencies: 1523 6
-- Name: materia_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE materia_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.materia_id_seq OWNER TO administrador;

--
-- TOC entry 1883 (class 0 OID 0)
-- Dependencies: 1522
-- Name: materia_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE materia_id_seq OWNED BY materias.id;


--
-- TOC entry 1884 (class 0 OID 0)
-- Dependencies: 1522
-- Name: materia_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('materia_id_seq', 3, true);


--
-- TOC entry 1509 (class 1259 OID 10353730)
-- Dependencies: 6
-- Name: persona; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE persona (
    id integer NOT NULL,
    co_cedula integer,
    localidad_id integer,
    tx_nacionalidad character varying(30),
    tx_municipio character varying(50),
    tx_nombre1 character varying(50),
    tx_nombre2 character varying(50),
    tx_apellido1 character varying(50),
    tx_apellido2 character varying(50),
    fe_nacimiento date,
    tx_lugar_nacimiento character varying(100),
    tx_sexo character varying(30),
    tx_edocivil character varying(20),
    nu_tlffijo character varying(20),
    nu_tlfmovil character varying(20),
    tx_grado_instruccion character varying(50),
    tx_email character varying(30)
);


ALTER TABLE universidad.persona OWNER TO administrador;

--
-- TOC entry 1508 (class 1259 OID 10353728)
-- Dependencies: 1509 6
-- Name: persona_co_persona_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE persona_co_persona_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.persona_co_persona_seq OWNER TO administrador;

--
-- TOC entry 1885 (class 0 OID 0)
-- Dependencies: 1508
-- Name: persona_co_persona_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE persona_co_persona_seq OWNED BY persona.id;


--
-- TOC entry 1886 (class 0 OID 0)
-- Dependencies: 1508
-- Name: persona_co_persona_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('persona_co_persona_seq', 1, true);


--
-- TOC entry 1521 (class 1259 OID 10353790)
-- Dependencies: 6
-- Name: pnf; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE pnf (
    id integer NOT NULL,
    co_pnf integer,
    tx_nombre character varying(150),
    tx_codigointerno_ubt character varying(150)
);


ALTER TABLE universidad.pnf OWNER TO administrador;

--
-- TOC entry 1520 (class 1259 OID 10353788)
-- Dependencies: 6 1521
-- Name: pnf_id_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE pnf_id_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.pnf_id_seq OWNER TO administrador;

--
-- TOC entry 1887 (class 0 OID 0)
-- Dependencies: 1520
-- Name: pnf_id_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE pnf_id_seq OWNED BY pnf.id;


--
-- TOC entry 1888 (class 0 OID 0)
-- Dependencies: 1520
-- Name: pnf_id_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('pnf_id_seq', 2, true);


--
-- TOC entry 1503 (class 1259 OID 10353618)
-- Dependencies: 6
-- Name: rol; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE rol (
    co_rol integer NOT NULL,
    tx_rol character varying(15),
    tx_descripcion_rol character varying(50)
);


ALTER TABLE universidad.rol OWNER TO administrador;

--
-- TOC entry 1502 (class 1259 OID 10353616)
-- Dependencies: 1503 6
-- Name: rol_co_rol_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE rol_co_rol_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.rol_co_rol_seq OWNER TO administrador;

--
-- TOC entry 1889 (class 0 OID 0)
-- Dependencies: 1502
-- Name: rol_co_rol_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE rol_co_rol_seq OWNED BY rol.co_rol;


--
-- TOC entry 1890 (class 0 OID 0)
-- Dependencies: 1502
-- Name: rol_co_rol_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('rol_co_rol_seq', 2, true);


--
-- TOC entry 1505 (class 1259 OID 10353676)
-- Dependencies: 1796 6
-- Name: usuarios; Type: TABLE; Schema: universidad; Owner: administrador; Tablespace: 
--

CREATE TABLE usuarios (
    co_usuario integer NOT NULL,
    tx_usuario character varying(60),
    rol_id integer,
    tx_password character varying(100),
    tx_tipo_usuario character(1) DEFAULT 'L'::bpchar
);


ALTER TABLE universidad.usuarios OWNER TO administrador;

--
-- TOC entry 1891 (class 0 OID 0)
-- Dependencies: 1505
-- Name: COLUMN usuarios.tx_tipo_usuario; Type: COMMENT; Schema: universidad; Owner: administrador
--

COMMENT ON COLUMN usuarios.tx_tipo_usuario IS 'Describe si el usuario es remoto o local
R=REMOTO(LDAP)
L=LOCAL (C005_USUARIO)';


--
-- TOC entry 1504 (class 1259 OID 10353674)
-- Dependencies: 1505 6
-- Name: usuarios_co_usuario_seq; Type: SEQUENCE; Schema: universidad; Owner: administrador
--

CREATE SEQUENCE usuarios_co_usuario_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE universidad.usuarios_co_usuario_seq OWNER TO administrador;

--
-- TOC entry 1892 (class 0 OID 0)
-- Dependencies: 1504
-- Name: usuarios_co_usuario_seq; Type: SEQUENCE OWNED BY; Schema: universidad; Owner: administrador
--

ALTER SEQUENCE usuarios_co_usuario_seq OWNED BY usuarios.co_usuario;


--
-- TOC entry 1893 (class 0 OID 0)
-- Dependencies: 1504
-- Name: usuarios_co_usuario_seq; Type: SEQUENCE SET; Schema: universidad; Owner: administrador
--

SELECT pg_catalog.setval('usuarios_co_usuario_seq', 5, true);


--
-- TOC entry 1807 (class 2604 OID 10353826)
-- Dependencies: 1527 1526 1527
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE calificacion ALTER COLUMN id SET DEFAULT nextval('calificacion_co_calificacion_seq'::regclass);


--
-- TOC entry 1802 (class 2604 OID 10353771)
-- Dependencies: 1517 1516 1517
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE centroformacion ALTER COLUMN id SET DEFAULT nextval('centroformacion_id_seq'::regclass);


--
-- TOC entry 1801 (class 2604 OID 10353763)
-- Dependencies: 1514 1515 1515
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE comision ALTER COLUMN id SET DEFAULT nextval('comision_id_seq'::regclass);


--
-- TOC entry 1799 (class 2604 OID 10353744)
-- Dependencies: 1510 1511 1511
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE coordinador_centro ALTER COLUMN id SET DEFAULT nextval('coordinador_centro_id_seq'::regclass);


--
-- TOC entry 1803 (class 2604 OID 10353782)
-- Dependencies: 1518 1519 1519
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE equipo_estudio ALTER COLUMN id SET DEFAULT nextval('equipo_estudio_id_seq'::regclass);


--
-- TOC entry 1806 (class 2604 OID 10353815)
-- Dependencies: 1525 1524 1525
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE equipo_materias ALTER COLUMN id SET DEFAULT nextval('equipo_materia_co_equipo_materia_seq'::regclass);


--
-- TOC entry 1800 (class 2604 OID 10353752)
-- Dependencies: 1513 1512 1513
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE facilitador ALTER COLUMN id SET DEFAULT nextval('facilitador_id_seq'::regclass);


--
-- TOC entry 1797 (class 2604 OID 10353700)
-- Dependencies: 1507 1506 1507
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE localidad ALTER COLUMN id SET DEFAULT nextval('localidad_co_localidad_seq'::regclass);


--
-- TOC entry 1805 (class 2604 OID 10353804)
-- Dependencies: 1522 1523 1523
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE materias ALTER COLUMN id SET DEFAULT nextval('materia_id_seq'::regclass);


--
-- TOC entry 1798 (class 2604 OID 10353733)
-- Dependencies: 1508 1509 1509
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE persona ALTER COLUMN id SET DEFAULT nextval('persona_co_persona_seq'::regclass);


--
-- TOC entry 1804 (class 2604 OID 10353793)
-- Dependencies: 1521 1520 1521
-- Name: id; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE pnf ALTER COLUMN id SET DEFAULT nextval('pnf_id_seq'::regclass);


--
-- TOC entry 1794 (class 2604 OID 10353621)
-- Dependencies: 1503 1502 1503
-- Name: co_rol; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE rol ALTER COLUMN co_rol SET DEFAULT nextval('rol_co_rol_seq'::regclass);


--
-- TOC entry 1795 (class 2604 OID 10353679)
-- Dependencies: 1504 1505 1505
-- Name: co_usuario; Type: DEFAULT; Schema: universidad; Owner: administrador
--

ALTER TABLE usuarios ALTER COLUMN co_usuario SET DEFAULT nextval('usuarios_co_usuario_seq'::regclass);


--
-- TOC entry 1859 (class 0 OID 10353823)
-- Dependencies: 1527
-- Data for Name: calificacion; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY calificacion (id, equipo_materia_id, persona_id, nu_calificacion) FROM stdin;
\.


--
-- TOC entry 1854 (class 0 OID 10353768)
-- Dependencies: 1517
-- Data for Name: centroformacion; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY centroformacion (id, co_centro_formacion, tx_centroformacion, tx_unidadformacion, localidad_id, persona_id) FROM stdin;
2	123456	PDVSA GAS	CARDIEL	1	1
1	123456789	PDVSA EYP	ESCUELA PDVSA	1	1
\.


--
-- TOC entry 1853 (class 0 OID 10353760)
-- Dependencies: 1515
-- Data for Name: comision; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY comision (id, co_ubt, persona_id, persona_idd, fe_registro) FROM stdin;
1	123456789	1	1	2012-11-28
\.


--
-- TOC entry 1851 (class 0 OID 10353741)
-- Dependencies: 1511
-- Data for Name: coordinador_centro; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY coordinador_centro (id, persona_id, fe_activo) FROM stdin;
1	1	2012-11-28
\.


--
-- TOC entry 1855 (class 0 OID 10353779)
-- Dependencies: 1519
-- Data for Name: equipo_estudio; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY equipo_estudio (id, co_equipo_estudio, tx_nombre_equipoestudio, pnf_id, centroformacion_id, tx_turno, tx_seccion) FROM stdin;
1	123456	EQUIPO DE ESTUDIO INF	2	2	NOCTURNO	UNICA
\.


--
-- TOC entry 1858 (class 0 OID 10353812)
-- Dependencies: 1525
-- Data for Name: equipo_materias; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY equipo_materias (id, materias_id, facilitador_id, fe_cierre, tx_periodo, tx_observacion, equipo_estudio_id) FROM stdin;
1	1	1	2012-11-28	2002-2009	OBSERVACION	1
\.


--
-- TOC entry 1852 (class 0 OID 10353749)
-- Dependencies: 1513
-- Data for Name: facilitador; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY facilitador (id, persona_id, tx_agresadouniversidad, tx_profesion, fe_grado, tx_postgrado) FROM stdin;
1	1	UDO	INGENIERO	2012-11-28	NINGUNO
\.


--
-- TOC entry 1849 (class 0 OID 10353697)
-- Dependencies: 1507
-- Data for Name: localidad; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY localidad (id, tx_estado, tx_municipio, tx_ciudad, tx_sector) FROM stdin;
1	ANZOTEGUI	ANACO	ANACO	CAMPO SUR
2	ANZOTEGUI	SAN JOAQUIN	ANACO	CAMPO NORTE
\.


--
-- TOC entry 1857 (class 0 OID 10353801)
-- Dependencies: 1523
-- Data for Name: materias; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY materias (id, co_materia, tx_unidad_curricular, nu_trayecto, nu_tramo, nu_uc, pnf_id) FROM stdin;
1	123456	MATEMATICAS	1	1	2	1
3	987456	INLGES I	1	3	2	1
2	123456789	INLGES II	2	3	3	1
\.


--
-- TOC entry 1850 (class 0 OID 10353730)
-- Dependencies: 1509
-- Data for Name: persona; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY persona (id, co_cedula, localidad_id, tx_nacionalidad, tx_municipio, tx_nombre1, tx_nombre2, tx_apellido1, tx_apellido2, fe_nacimiento, tx_lugar_nacimiento, tx_sexo, tx_edocivil, nu_tlffijo, nu_tlfmovil, tx_grado_instruccion, tx_email) FROM stdin;
1	15424390	1	VENEZOLANO	ANACO	CELSO	JOSE	VALDEZ	CASTRO	1981-10-12	CARUPANO	MASCULINO	CASADO	02949820878	04128695062	INGENIERO	VALDEZCJ@PDVSA.COM
\.


--
-- TOC entry 1856 (class 0 OID 10353790)
-- Dependencies: 1521
-- Data for Name: pnf; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY pnf (id, co_pnf, tx_nombre, tx_codigointerno_ubt) FROM stdin;
2	123456789	MECANICA	MECANICA_UBT
1	1234567899	INFORMATICA	UBT_INFORMATICA
\.


--
-- TOC entry 1847 (class 0 OID 10353618)
-- Dependencies: 1503
-- Data for Name: rol; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY rol (co_rol, tx_rol, tx_descripcion_rol) FROM stdin;
1	ADMINISTRADOR	ADMINISTRADOR
2	OPERADOR	OPERADOR
\.


--
-- TOC entry 1848 (class 0 OID 10353676)
-- Dependencies: 1505
-- Data for Name: usuarios; Type: TABLE DATA; Schema: universidad; Owner: administrador
--

COPY usuarios (co_usuario, tx_usuario, rol_id, tx_password, tx_tipo_usuario) FROM stdin;
1	VALDEZCJ	2	e10adc3949ba59abbe56e057f20f883e	L
2	BLANCOCP	2	e10adc3949ba59abbe56e057f20f883e	L
5	DSWDFWE	1	90722b9e1083aa77337a6b7d9f0a2a4a	 
\.


--
-- TOC entry 1811 (class 2606 OID 10353681)
-- Dependencies: 1505 1505
-- Name: c005pk_usuario; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT c005pk_usuario PRIMARY KEY (co_usuario);


--
-- TOC entry 1833 (class 2606 OID 10353828)
-- Dependencies: 1527 1527
-- Name: calificacion_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY calificacion
    ADD CONSTRAINT calificacion_pkey PRIMARY KEY (id);


--
-- TOC entry 1823 (class 2606 OID 10353776)
-- Dependencies: 1517 1517
-- Name: centroformacion_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY centroformacion
    ADD CONSTRAINT centroformacion_pkey PRIMARY KEY (id);


--
-- TOC entry 1821 (class 2606 OID 10353765)
-- Dependencies: 1515 1515
-- Name: comision_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY comision
    ADD CONSTRAINT comision_pkey PRIMARY KEY (id);


--
-- TOC entry 1817 (class 2606 OID 10353746)
-- Dependencies: 1511 1511
-- Name: coordinador_centro_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY coordinador_centro
    ADD CONSTRAINT coordinador_centro_pkey PRIMARY KEY (id);


--
-- TOC entry 1825 (class 2606 OID 10353787)
-- Dependencies: 1519 1519
-- Name: equipo_estudio_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY equipo_estudio
    ADD CONSTRAINT equipo_estudio_pkey PRIMARY KEY (id);


--
-- TOC entry 1831 (class 2606 OID 10353820)
-- Dependencies: 1525 1525
-- Name: equipo_materia_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY equipo_materias
    ADD CONSTRAINT equipo_materia_pkey PRIMARY KEY (id);


--
-- TOC entry 1819 (class 2606 OID 10353757)
-- Dependencies: 1513 1513
-- Name: facilitador_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY facilitador
    ADD CONSTRAINT facilitador_pkey PRIMARY KEY (id);


--
-- TOC entry 1809 (class 2606 OID 10353623)
-- Dependencies: 1503 1503
-- Name: i002pk_rol; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY rol
    ADD CONSTRAINT i002pk_rol PRIMARY KEY (co_rol);


--
-- TOC entry 1813 (class 2606 OID 10353705)
-- Dependencies: 1507 1507
-- Name: localidad_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY localidad
    ADD CONSTRAINT localidad_pkey PRIMARY KEY (id);


--
-- TOC entry 1829 (class 2606 OID 10353809)
-- Dependencies: 1523 1523
-- Name: materia_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY materias
    ADD CONSTRAINT materia_pkey PRIMARY KEY (id);


--
-- TOC entry 1815 (class 2606 OID 10353738)
-- Dependencies: 1509 1509
-- Name: persona_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (id);


--
-- TOC entry 1827 (class 2606 OID 10353798)
-- Dependencies: 1521 1521
-- Name: pnf_pkey; Type: CONSTRAINT; Schema: universidad; Owner: administrador; Tablespace: 
--

ALTER TABLE ONLY pnf
    ADD CONSTRAINT pnf_pkey PRIMARY KEY (id);


--
-- TOC entry 1834 (class 2606 OID 10353682)
-- Dependencies: 1808 1505 1503
-- Name: c005fk_i002t_rol; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT c005fk_i002t_rol FOREIGN KEY (rol_id) REFERENCES rol(co_rol);


--
-- TOC entry 1846 (class 2606 OID 10354078)
-- Dependencies: 1527 1830 1525
-- Name: calificacion_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY calificacion
    ADD CONSTRAINT calificacion_fk FOREIGN KEY (equipo_materia_id) REFERENCES equipo_materias(id);


--
-- TOC entry 1845 (class 2606 OID 10353884)
-- Dependencies: 1527 1509 1814
-- Name: calificacion_fk2; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY calificacion
    ADD CONSTRAINT calificacion_fk2 FOREIGN KEY (persona_id) REFERENCES persona(id);


--
-- TOC entry 1838 (class 2606 OID 10353844)
-- Dependencies: 1517 1507 1812
-- Name: centroformacion_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY centroformacion
    ADD CONSTRAINT centroformacion_fk FOREIGN KEY (localidad_id) REFERENCES localidad(id);


--
-- TOC entry 1839 (class 2606 OID 10353849)
-- Dependencies: 1509 1517 1814
-- Name: centroformacion_fk1; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY centroformacion
    ADD CONSTRAINT centroformacion_fk1 FOREIGN KEY (persona_id) REFERENCES persona(id);


--
-- TOC entry 1836 (class 2606 OID 10353834)
-- Dependencies: 1511 1509 1814
-- Name: coordinador_centro_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY coordinador_centro
    ADD CONSTRAINT coordinador_centro_fk FOREIGN KEY (persona_id) REFERENCES persona(id) DEFERRABLE;


--
-- TOC entry 1840 (class 2606 OID 10353854)
-- Dependencies: 1519 1517 1822
-- Name: equipo_estudio_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY equipo_estudio
    ADD CONSTRAINT equipo_estudio_fk FOREIGN KEY (centroformacion_id) REFERENCES centroformacion(id);


--
-- TOC entry 1841 (class 2606 OID 10353859)
-- Dependencies: 1521 1519 1826
-- Name: equipo_estudio_fk1; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY equipo_estudio
    ADD CONSTRAINT equipo_estudio_fk1 FOREIGN KEY (pnf_id) REFERENCES pnf(id);


--
-- TOC entry 1842 (class 2606 OID 10353864)
-- Dependencies: 1523 1525 1828
-- Name: equipo_materia_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY equipo_materias
    ADD CONSTRAINT equipo_materia_fk FOREIGN KEY (materias_id) REFERENCES materias(id);


--
-- TOC entry 1843 (class 2606 OID 10353869)
-- Dependencies: 1513 1818 1525
-- Name: equipo_materia_fk1; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY equipo_materias
    ADD CONSTRAINT equipo_materia_fk1 FOREIGN KEY (facilitador_id) REFERENCES facilitador(id);


--
-- TOC entry 1844 (class 2606 OID 10354073)
-- Dependencies: 1525 1824 1519
-- Name: equipo_materia_fk2; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY equipo_materias
    ADD CONSTRAINT equipo_materia_fk2 FOREIGN KEY (equipo_estudio_id) REFERENCES equipo_estudio(id);


--
-- TOC entry 1837 (class 2606 OID 10353839)
-- Dependencies: 1814 1509 1513
-- Name: facilitador_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY facilitador
    ADD CONSTRAINT facilitador_fk FOREIGN KEY (persona_id) REFERENCES persona(id);


--
-- TOC entry 1835 (class 2606 OID 10353829)
-- Dependencies: 1812 1507 1509
-- Name: persona_fk; Type: FK CONSTRAINT; Schema: universidad; Owner: administrador
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT persona_fk FOREIGN KEY (localidad_id) REFERENCES localidad(id);


--
-- TOC entry 1864 (class 0 OID 0)
-- Dependencies: 3
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2012-11-29 07:04:43 VET

--
-- PostgreSQL database dump complete
--

