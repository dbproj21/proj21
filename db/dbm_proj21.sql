/*
 Navicat Premium Data Transfer

 Source Server         : Oracle MIS_DBM
 Source Server Type    : Oracle
 Source Server Version : 112010
 Source Host           : 10.211.55.4
 Source Schema         : DBM

 Target Server Type    : Oracle
 Target Server Version : 112010
 File Encoding         : utf-8

 Date: 07/14/2012 18:42:57 PM
*/

-- ----------------------------
--  Table structure for "CBS_DEPARTMENTS"
-- ----------------------------
DROP TABLE "CBS_DEPARTMENTS";
CREATE TABLE "CBS_DEPARTMENTS" (   "CBS_ID" NUMBER NOT NULL, "CBS_DEPARTMENT" VARCHAR2(32BYTE) NOT NULL);

-- ----------------------------
--  Records of "CBS_DEPARTMENTS"
-- ----------------------------
INSERT INTO "CBS_DEPARTMENTS" VALUES ('1', 'บัญขีบัณฑิต');
INSERT INTO "CBS_DEPARTMENTS" VALUES ('2', 'บริหารธุรกิจบัณฑิต');
INSERT INTO "CBS_DEPARTMENTS" VALUES ('3', 'สถิติศาสตรบัณฑิต');
COMMIT;

-- ----------------------------
--  Table structure for "CBS_PREFERED"
-- ----------------------------
DROP TABLE "CBS_PREFERED";
CREATE TABLE "CBS_PREFERED" (   "ID_CODE" NUMBER(13,0) NOT NULL, "CBS_ID" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "CBS_COURSE"
-- ----------------------------
DROP TABLE "CBS_COURSE";
CREATE TABLE "CBS_COURSE" (   "CBS_ID" NUMBER NOT NULL, "COURSE_ID" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "CLASS"
-- ----------------------------
DROP TABLE "CLASS";
CREATE TABLE "CLASS" (   "CLASSROOM_ID" NUMBER NOT NULL, "COURSE_ID" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "CLASSROOM"
-- ----------------------------
DROP TABLE "CLASSROOM";
CREATE TABLE "CLASSROOM" (   "CLASSROOM_ID" NUMBER NOT NULL, "ROOM_NO" VARCHAR2(8BYTE) NOT NULL, "MAX_SEAT" NUMBER(2,0) NOT NULL, "LEFT_SEAT" NUMBER(2,0));

-- ----------------------------
--  Table structure for "COURSE"
-- ----------------------------
DROP TABLE "COURSE";
CREATE TABLE "COURSE" (   "COURSE_ID" NUMBER NOT NULL, "COURSE_NAME" VARCHAR2(32BYTE) NOT NULL, "COURSE_FEE" NUMBER(4,0) NOT NULL, "COURSE_START" DATE NOT NULL, "COURSE_END" DATE NOT NULL);

-- ----------------------------
--  Records of "COURSE"
-- ----------------------------
INSERT INTO "COURSE" VALUES ('101', 'ความรู้ทั่วไป1', '2000', TO_DATE('2012-07-11 00:00:00','YYYY-MM-DD HH24:MI:SS'), TO_DATE('2012-08-10 00:00:00','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "COURSE" VALUES ('102', 'ความรู้ทั่วไป1', '2000', TO_DATE('2012-08-11 00:00:00','YYYY-MM-DD HH24:MI:SS'), TO_DATE('2012-09-10 00:00:00','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "COURSE" VALUES ('201', 'คณิตศาสตร์1', '2500', TO_DATE('2012-07-11 00:00:00','YYYY-MM-DD HH24:MI:SS'), TO_DATE('2012-08-25 00:00:00','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "COURSE" VALUES ('202', 'คณิตศาสตร์1', '2500', TO_DATE('2012-07-15 00:00:00','YYYY-MM-DD HH24:MI:SS'), TO_DATE('2012-08-29 00:00:00','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "COURSE" VALUES ('301', 'วิทยาศาสตร์1', '2500', TO_DATE('2012-07-15 00:00:00','YYYY-MM-DD HH24:MI:SS'), TO_DATE('2012-08-15 00:00:00','YYYY-MM-DD HH24:MI:SS'));
COMMIT;

-- ----------------------------
--  Table structure for "COURSE_SCHEDULE"
-- ----------------------------
DROP TABLE "COURSE_SCHEDULE";
CREATE TABLE "COURSE_SCHEDULE" (   "COURSE_ID" NUMBER NOT NULL, "DAY" NUMBER, "BEGIN_TIME" DATE NOT NULL, "END_TIME" DATE NOT NULL, "HOURS" NUMBER(2,1) NOT NULL, "SCHEDULE_ID" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "COURSE_TRAINER"
-- ----------------------------
DROP TABLE "COURSE_TRAINER";
CREATE TABLE "COURSE_TRAINER" (   "COURSE_ID" NUMBER NOT NULL, "TRAINER_ID" NUMBER(2,0) NOT NULL);

-- ----------------------------
--  Table structure for "DEPARTMENT"
-- ----------------------------
DROP TABLE "DEPARTMENT";
CREATE TABLE "DEPARTMENT" (   "DEP_ID" NUMBER NOT NULL, "DEPARTMENT_NAME" VARCHAR2(32BYTE) NOT NULL);

-- ----------------------------
--  Records of "DEPARTMENT"
-- ----------------------------
INSERT INTO "DEPARTMENT" VALUES ('1', 'หมวดสังคมศึกษา');
INSERT INTO "DEPARTMENT" VALUES ('2', 'หมวดคณิตศาสตร์');
INSERT INTO "DEPARTMENT" VALUES ('3', 'หมวดวิทยาศาสตร์');
COMMIT;

-- ----------------------------
--  Table structure for "EXAM"
-- ----------------------------
DROP TABLE "EXAM";
CREATE TABLE "EXAM" (   "EXAM_NO" NUMBER NOT NULL, "ITEM" NUMBER NOT NULL, "QUESTION" VARCHAR2(160BYTE) NOT NULL, "ANS1" VARCHAR2(160BYTE) NOT NULL, "ANS2" VARCHAR2(160BYTE) NOT NULL, "ANS3" VARCHAR2(160BYTE) NOT NULL, "ANS4" VARCHAR2(160BYTE) NOT NULL, "ANS" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "EXAM_SERIES"
-- ----------------------------
DROP TABLE "EXAM_SERIES";
CREATE TABLE "EXAM_SERIES" (   "COURSE_ID" NUMBER NOT NULL, "EXAM_NO" NUMBER NOT NULL, "EXAM_DESCRIPTION" VARCHAR2(60BYTE), "FULL_SCORE" NUMBER(3,0) NOT NULL);

-- ----------------------------
--  Table structure for "STD_PROFILE"
-- ----------------------------
DROP TABLE "STD_PROFILE";
CREATE TABLE "STD_PROFILE" (   "ID_CODE" NUMBER(13,0) NOT NULL, "FIRSTNAME" VARCHAR2(20BYTE) NOT NULL, "LASTNAME" VARCHAR2(20BYTE) NOT NULL, "PIC" BLOB, "TITLE" VARCHAR2(8BYTE), "BIRTHDATE" DATE, "ADDRESS" VARCHAR2(120BYTE) NOT NULL, "PROVINCE" VARCHAR2(32BYTE) NOT NULL, "PHONE_NO" NUMBER(10,0) NOT NULL, "EMAIL" VARCHAR2(32BYTE) NOT NULL, "INSTITUTE_NAME" VARCHAR2(16BYTE) NOT NULL, "EDU_LEVEL" NUMBER(1,0) NOT NULL, "GPA" NUMBER(3,2) NOT NULL, "REGISTERED_DATE" DATE DEFAULT sysdate
    NOT NULL);

-- ----------------------------
--  Records of "STD_PROFILE"
-- ----------------------------
INSERT INTO "STD_PROFILE" VALUES ('1111111111111', 'มาลิเพ้ญ', 'ถือมาลา', null, 'นางสาว', TO_DATE('2012-07-11 13:10:22','YYYY-MM-DD HH24:MI:SS'), 'เมือง', 'นครราชสีมา', '819761693', 'gmalipen@gmail.com', 'ราชสีมาวิทยาลัย', '6', '3.29', TO_DATE('2012-07-11 13:11:21','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "STD_PROFILE" VALUES ('1211111111111', 'Malipen', 'Tuemala', null, 'นางสาว', TO_DATE('2012-07-11 00:00:00','YYYY-MM-DD HH24:MI:SS'), 'เมือง', 'นครราชสีมา', '819761692', 'malipen@hotmail.com', 'rajsima', '6', '2.27', TO_DATE('2012-07-11 00:00:00','YYYY-MM-DD HH24:MI:SS'));
COMMIT;

-- ----------------------------
--  Table structure for "TAKE_EXAM"
-- ----------------------------
DROP TABLE "TAKE_EXAM";
CREATE TABLE "TAKE_EXAM" (   "ID_CODE" NUMBER(13,0) NOT NULL, "ITEM" NUMBER NOT NULL, "ANS" NUMBER NOT NULL, "TEST_DATE" DATE DEFAULT sysdate
    NOT NULL);

-- ----------------------------
--  Table structure for "TRAINEE_GRADE"
-- ----------------------------
DROP TABLE "TRAINEE_GRADE";
CREATE TABLE "TRAINEE_GRADE" (   "ID_CODE" NUMBER(13,0) NOT NULL, "COURSE_ID" NUMBER NOT NULL, "EXAM_NO" NUMBER NOT NULL, "PRETEST_SCORE" NUMBER(3,0), "POSTTEST_SCORE" NUMBER(3,0));

-- ----------------------------
--  Table structure for "TRAINER_PROFILE"
-- ----------------------------
DROP TABLE "TRAINER_PROFILE";
CREATE TABLE "TRAINER_PROFILE" (   "TRAINER_ID" NUMBER(2,0) NOT NULL, "FIRSTNAME" VARCHAR2(20BYTE) NOT NULL, "LASTNAME" VARCHAR2(20BYTE) NOT NULL, "PIC" BLOB, "GENDER" VARCHAR2(8BYTE), "PHONE_NO" NUMBER(10,0) NOT NULL, "EMAIL" VARCHAR2(32BYTE) NOT NULL, "DEGREE" VARCHAR2(16BYTE), "PROGRAM" VARCHAR2(16BYTE), "UNIVERSITY" VARCHAR2(16BYTE), "DEPT_ID" NUMBER NOT NULL);

-- ----------------------------
--  Table structure for "USER_LOGIN"
-- ----------------------------
DROP TABLE "USER_LOGIN";
CREATE TABLE "USER_LOGIN" (   "ID_CODE" NUMBER(13,0) NOT NULL, "USERNAME" VARCHAR2(8BYTE) NOT NULL, "PASSWD" VARCHAR2(8BYTE) NOT NULL, "LAST_LOGIN" DATE DEFAULT sysdate
    NOT NULL);

-- ----------------------------
--  Records of "USER_LOGIN"
-- ----------------------------
INSERT INTO "USER_LOGIN" VALUES ('1111111111111', 'มาลิเพ็ญ', '1234', TO_DATE('2012-07-14 16:48:58','YYYY-MM-DD HH24:MI:SS'));
INSERT INTO "USER_LOGIN" VALUES ('1211111111111', 'Malipen', '1234', TO_DATE('2012-07-14 16:49:45','YYYY-MM-DD HH24:MI:SS'));
COMMIT;

-- ----------------------------
--  Primary key structure for table "CBS_DEPARTMENTS"
-- ----------------------------
ALTER TABLE "CBS_DEPARTMENTS" ADD CONSTRAINT "SYS_C0010396" PRIMARY KEY("CBS_ID");

-- ----------------------------
--  Primary key structure for table "CBS_PREFERED"
-- ----------------------------
ALTER TABLE "CBS_PREFERED" ADD CONSTRAINT "SYS_C0010399" PRIMARY KEY("ID_CODE","CBS_ID");

-- ----------------------------
--  Primary key structure for table "CBS_COURSE"
-- ----------------------------
ALTER TABLE "CBS_COURSE" ADD CONSTRAINT "SYS_C0010393" PRIMARY KEY("CBS_ID","COURSE_ID");

-- ----------------------------
--  Primary key structure for table "CLASS"
-- ----------------------------
ALTER TABLE "CLASS" ADD CONSTRAINT "SYS_C0010402" PRIMARY KEY("CLASSROOM_ID","COURSE_ID");

-- ----------------------------
--  Primary key structure for table "CLASSROOM"
-- ----------------------------
ALTER TABLE "CLASSROOM" ADD CONSTRAINT "SYS_C0010406" PRIMARY KEY("CLASSROOM_ID");

-- ----------------------------
--  Primary key structure for table "COURSE"
-- ----------------------------
ALTER TABLE "COURSE" ADD CONSTRAINT "SYS_C0010412" PRIMARY KEY("COURSE_ID");

-- ----------------------------
--  Primary key structure for table "COURSE_SCHEDULE"
-- ----------------------------
ALTER TABLE "COURSE_SCHEDULE" ADD CONSTRAINT "SYS_C0010418" PRIMARY KEY("SCHEDULE_ID");

-- ----------------------------
--  Primary key structure for table "COURSE_TRAINER"
-- ----------------------------
ALTER TABLE "COURSE_TRAINER" ADD CONSTRAINT "SYS_C0010421" PRIMARY KEY("COURSE_ID","TRAINER_ID");

-- ----------------------------
--  Primary key structure for table "DEPARTMENT"
-- ----------------------------
ALTER TABLE "DEPARTMENT" ADD CONSTRAINT "SYS_C0010424" PRIMARY KEY("DEP_ID");

-- ----------------------------
--  Primary key structure for table "EXAM"
-- ----------------------------
ALTER TABLE "EXAM" ADD CONSTRAINT "SYS_C0010433" PRIMARY KEY("ITEM");

-- ----------------------------
--  Primary key structure for table "EXAM_SERIES"
-- ----------------------------
ALTER TABLE "EXAM_SERIES" ADD CONSTRAINT "SYS_C0010437" PRIMARY KEY("EXAM_NO");

-- ----------------------------
--  Primary key structure for table "STD_PROFILE"
-- ----------------------------
ALTER TABLE "STD_PROFILE" ADD CONSTRAINT "SYS_C0010449" PRIMARY KEY("ID_CODE");

-- ----------------------------
--  Primary key structure for table "TAKE_EXAM"
-- ----------------------------
ALTER TABLE "TAKE_EXAM" ADD CONSTRAINT "SYS_C0010454" PRIMARY KEY("ID_CODE","ITEM");

-- ----------------------------
--  Primary key structure for table "TRAINEE_GRADE"
-- ----------------------------
ALTER TABLE "TRAINEE_GRADE" ADD CONSTRAINT "SYS_C0010458" PRIMARY KEY("ID_CODE","COURSE_ID","EXAM_NO");

-- ----------------------------
--  Primary key structure for table "TRAINER_PROFILE"
-- ----------------------------
ALTER TABLE "TRAINER_PROFILE" ADD CONSTRAINT "SYS_C0010465" PRIMARY KEY("TRAINER_ID");

-- ----------------------------
--  Primary key structure for table "USER_LOGIN"
-- ----------------------------
ALTER TABLE "USER_LOGIN" ADD CONSTRAINT "SYS_C0010470" PRIMARY KEY("ID_CODE");

