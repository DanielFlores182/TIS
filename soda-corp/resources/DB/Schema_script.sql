-- -------------------------------------------------------------------------
-- PostgreSQL SQL create tables
-- exported at Thu Sep 12 18:16:56 BOT 2024 with easyDesigner
-- -------------------------------------------------------------------------

-- -------------------------------------------------------------------------
-- Table: UserN
-- -------------------------------------------------------------------------
CREATE TABLE "UserN" (
  "id_usuario" INTEGER NOT NULL,
  "nombre" CHARACTER VARYING NOT NULL,
  "clave" CHARACTER VARYING NOT NULL,
  "tipo" INTEGER NOT NULL,
  PRIMARY KEY ("id_usuario")
);

-- -------------------------------------------------------------------------
-- Table: Grupo
-- -------------------------------------------------------------------------
CREATE TABLE "Grupo" (
  "nombre" CHARACTER VARYING NOT NULL,
  "Docente_userN_id_contacto" INTEGER NOT NULL,
  "descripcion" CHARACTER VARYING NULL,
  PRIMARY KEY ("nombre", "Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Plan
-- -------------------------------------------------------------------------
CREATE TABLE "Plan" (
  "Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "tipo_plan" INTEGER NOT NULL,
  "descripcion" CHARACTER VARYING NULL,
  PRIMARY KEY ("Grupo_nombre", "Grupo_Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Docente
-- -------------------------------------------------------------------------
CREATE TABLE "Docente" (
  "userN_id_contacto" INTEGER NOT NULL,
  PRIMARY KEY ("userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Estudiante
-- -------------------------------------------------------------------------
CREATE TABLE "Estudiante" (
  "userN_id_contacto" INTEGER NOT NULL,
  PRIMARY KEY ("userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Tarea
-- -------------------------------------------------------------------------
CREATE TABLE "Tarea" (
  "Plan_Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Plan_Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "Estudiante_userN_id_contacto" INTEGER NOT NULL,
  "id_tarea" INTEGER NULL,
  "detalle" CHARACTER VARYING NULL,
  "archivo" BYTEA NULL,
  "path" CHARACTER VARYING NULL,
  PRIMARY KEY ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto", "Estudiante_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Evaluacion
-- -------------------------------------------------------------------------
CREATE TABLE "Evaluacion" (
  "Plan_Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Plan_Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "tipo_evaluacion" INTEGER NULL,
  "calificacion" INTEGER NULL,
  "descripcion" CHARACTER VARYING NULL,
  PRIMARY KEY ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Grupo_estu
-- -------------------------------------------------------------------------
CREATE TABLE "Grupo_estu" (
  "id estudiante" INTEGER NOT NULL,
  "Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "rol" INTEGER NULL,
  PRIMARY KEY ("id estudiante", "Grupo_nombre", "Grupo_Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Tipo_plan
-- -------------------------------------------------------------------------
CREATE TABLE "Tipo_plan" (
  "id_plan" INTEGER NOT NULL,
  "nombre" CHARACTER VARYING NULL,
  "detalle" CHARACTER VARYING NULL,
  "entregable" CHARACTER VARYING NULL,
  PRIMARY KEY ("id_plan")
);

-- -------------------------------------------------------------------------
-- Table: Evauacion_cruzada
-- -------------------------------------------------------------------------
CREATE TABLE "Evauacion_cruzada" (
  "Evaluacion_Plan_Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Evaluacion_Plan_Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  PRIMARY KEY ("Evaluacion_Plan_Grupo_nombre", "Evaluacion_Plan_Grupo_Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Table: Evaluacion_pares
-- -------------------------------------------------------------------------
CREATE TABLE "Evaluacion_pares" (
  "Evaluacion_Plan_Grupo_nombre" CHARACTER VARYING NOT NULL,
  "Evaluacion_Plan_Grupo_Docente_userN_id_contacto" INTEGER NOT NULL,
  "evaluador" INTEGER NOT NULL,
  "evaluado" INTEGER NULL,
  PRIMARY KEY ("Evaluacion_Plan_Grupo_nombre", "Evaluacion_Plan_Grupo_Docente_userN_id_contacto")
);

-- -------------------------------------------------------------------------
-- Relations for table: Grupo
-- -------------------------------------------------------------------------
ALTER TABLE "Grupo" ADD FOREIGN KEY ("Docente_userN_id_contacto") 
    REFERENCES "Docente" ("userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Plan
-- -------------------------------------------------------------------------
ALTER TABLE "Plan" ADD FOREIGN KEY ("tipo_plan") 
    REFERENCES "Tipo_plan" ("id_plan")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Plan" ADD FOREIGN KEY ("Grupo_nombre", "Grupo_Docente_userN_id_contacto") 
    REFERENCES "Grupo" ("nombre", "Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Docente
-- -------------------------------------------------------------------------
ALTER TABLE "Docente" ADD FOREIGN KEY ("userN_id_contacto") 
    REFERENCES "UserN" ("id_usuario")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Estudiante
-- -------------------------------------------------------------------------
ALTER TABLE "Estudiante" ADD FOREIGN KEY ("userN_id_contacto") 
    REFERENCES "UserN" ("id_usuario")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Tarea
-- -------------------------------------------------------------------------
ALTER TABLE "Tarea" ADD FOREIGN KEY ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto") 
    REFERENCES "Plan" ("Grupo_nombre", "Grupo_Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Tarea" ADD FOREIGN KEY ("Estudiante_userN_id_contacto") 
    REFERENCES "Estudiante" ("userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Evaluacion
-- -------------------------------------------------------------------------
ALTER TABLE "Evaluacion" ADD FOREIGN KEY ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto") 
    REFERENCES "Plan" ("Grupo_nombre", "Grupo_Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Grupo_estu
-- -------------------------------------------------------------------------
ALTER TABLE "Grupo_estu" ADD FOREIGN KEY ("id estudiante") 
    REFERENCES "Estudiante" ("userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Grupo_estu" ADD FOREIGN KEY ("Grupo_nombre", "Grupo_Docente_userN_id_contacto") 
    REFERENCES "Grupo" ("nombre", "Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Evauacion_cruzada
-- -------------------------------------------------------------------------
ALTER TABLE "Evauacion_cruzada" ADD FOREIGN KEY ("Grupo_nombre", "Grupo_Docente_userN_id_contacto") 
    REFERENCES "Grupo" ("nombre", "Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Evauacion_cruzada" ADD FOREIGN KEY ("Evaluacion_Plan_Grupo_nombre", "Evaluacion_Plan_Grupo_Docente_userN_id_contacto") 
    REFERENCES "Evaluacion" ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;

-- -------------------------------------------------------------------------
-- Relations for table: Evaluacion_pares
-- -------------------------------------------------------------------------
ALTER TABLE "Evaluacion_pares" ADD FOREIGN KEY ("Evaluacion_Plan_Grupo_nombre", "Evaluacion_Plan_Grupo_Docente_userN_id_contacto") 
    REFERENCES "Evaluacion" ("Plan_Grupo_nombre", "Plan_Grupo_Docente_userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Evaluacion_pares" ADD FOREIGN KEY ("evaluador") 
    REFERENCES "Estudiante" ("userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;
ALTER TABLE "Evaluacion_pares" ADD FOREIGN KEY ("evaluado") 
    REFERENCES "Estudiante" ("userN_id_contacto")
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;