***ALUMNI PORTAL DATABASE DOCUMENTATION***
   ====================================

CONVENTION USED
===============
	*all headings are in uppercase and underlined
	*entities are denoted with Uppercase
	*'//' are used for comments

BUSSINESS RULES
===============
	*ALUMNI are passouts of institute
	*ALUMNI may be working with more than one organisation
	*REUNIONS may be organised for more than one course
	*QUESTION have more than one ANSWER
		
ALUM_PERSONAL_INFO   //Alumni personal info is stored in this table
==================
	*alum_Id
	*first_Name
	*last_Name
	*gender
	*date_Birth
	*blood_Group
	*martial_Status
	*road_Area
	*city
	*pin_Code
	*country
	*country_Code
	*email_Id
	*phone_No
	
ALUM_COLLEGE_INFO  //All college related info of an alum is stored in this table
=================
	*alum_Id
	*course
	*last_Qualified_Degree
	*year_Of_Passing

ALUM_ORGANIZATIONAL_INFO   //present professional info is stored in this table
========================
	*alum_ID
	*name_Organization
	*alum_Designation

LAST_JOB   //last job of alum
========
	*alum_ID
	*name_Organization
	*alum_Designation
	
ADMIN_INFO      //this portal has an admin whose info is stored in this table
==========
	*admin_Id
	*first_Name
	*last_Name
	*admin_Designation
	*mail_Id
	*phone_No

CHOICE_OF_ALUM   //choice of alum for reason such as judge in a event, to honor or to have guest lecture
==============
	*alum_Id
	*by_whom     //either IIPS faculty or admin.ID of that person.
	*reason    //honor,judge,guest_lec
	*event
	*date
	
DOCUMENT_INFO    //document required by alum
=============
	*alum_Id
	*doc_Type
	*admin_Aknowledgement   //yes or no
	*date_Requested   //date
	*date_Approved   //date when admin aknowledged
	
LEC_BY_ALUM   //Guest lecture organised by alum
===========
	*alum_Id
	*organised_For 
	*topic
	*venue
	*date

REUNIONS
========
	*reunion_Id
	*date
	*time
	*venue
	*organised_By    //by any particular course, admin, director or an alum     

REUNION_ORGANIZATION    //for  whom reunions are organised
====================
	*reunion_Id
	*organized_For
	
FORUM_INFO    //Questions are stored
==========
	*person_Id   //id of person who asked
	*ques_Id 
	*ques_topic
	*discription_Ques

ANSWER_INFO    //answers are stored 
===========
	*ans_Id
	*person_Id   //id of person who answered the Ques
	*ques_Id
	*ans_discription
	
EXTRA_ACHIEVEMENT   //extraordinary achievements
=================
	*alum_Id
	*achievement

POST_JOB  //any job that is posted by any alum
========
	*alum_Id
	*designation
	*organisation
	*contact_Details
	*discription
	
LOGIN  //will contain user name and password
=====
	*person_Id
	*username
	*pass
	

	 // until system is not connected to existing IIPS system, which allow login facility to students/teachers we need to maintain infos as we have some features for students and teachers.
	
STUDENTS_INFO    
=============
	*enroll_No
	*first_Name
	*last_Name
	*year_Of_Joining
	*course
	*email
	*phone
		
FACULTY_INFO
=============
	*faculty_Id
	*first_Name
	*last_Name
	*related_Fields   //what are the fields a faculty teaches
	*designation
	*email
	*phone
		
