--
-- PostgreSQL database dump
--

-- Dumped from database version 11.1
-- Dumped by pg_dump version 11.1

-- Started on 2019-05-17 09:30:54

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 8 (class 2615 OID 32857)
-- Name: plante; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA plante;


ALTER SCHEMA plante OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 199 (class 1259 OID 32864)
-- Name: capteur; Type: TABLE; Schema: plante; Owner: postgres
--

CREATE TABLE plante.capteur (
    id_capteur integer NOT NULL,
    humidite_capteur double precision,
    temp_capteur double precision,
    luminisote_capteur double precision,
    date_capteur date
);


ALTER TABLE plante.capteur OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 32858)
-- Name: plante; Type: TABLE; Schema: plante; Owner: postgres
--

CREATE TABLE plante.plante (
    id_plante integer NOT NULL,
    name_plante character varying(30),
    categorie_plante character varying(30),
    description_plante character varying(100),
    photo_plante character varying(100),
    humidite_plante integer,
    temp_plante double precision,
    luminosite_plante integer,
    floraison_plante character varying(30),
    lien_plante character varying(30)
);


ALTER TABLE plante.plante OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 32861)
-- Name: user; Type: TABLE; Schema: plante; Owner: postgres
--

CREATE TABLE plante."user" (
    id_user integer NOT NULL,
    pseudo_user character varying(20),
    mail_user character varying(30),
    password_user character varying(30)
);


ALTER TABLE plante."user" OWNER TO postgres;

--
-- TOC entry 2815 (class 0 OID 32864)
-- Dependencies: 199
-- Data for Name: capteur; Type: TABLE DATA; Schema: plante; Owner: postgres
--

COPY plante.capteur (id_capteur, humidite_capteur, temp_capteur, luminisote_capteur, date_capteur) FROM stdin;
\.


--
-- TOC entry 2813 (class 0 OID 32858)
-- Dependencies: 197
-- Data for Name: plante; Type: TABLE DATA; Schema: plante; Owner: postgres
--

COPY plante.plante (id_plante, name_plante, categorie_plante, description_plante, photo_plante, humidite_plante, temp_plante, luminosite_plante, floraison_plante, lien_plante) FROM stdin;
\.


--
-- TOC entry 2814 (class 0 OID 32861)
-- Dependencies: 198
-- Data for Name: user; Type: TABLE DATA; Schema: plante; Owner: postgres
--

COPY plante."user" (id_user, pseudo_user, mail_user, password_user) FROM stdin;
\.


-- Completed on 2019-05-17 09:30:54

--
-- PostgreSQL database dump complete
--

