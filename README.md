# Software Requirements Specification
## For rudchin.educo

Version 0.1  
Prepared by Pawan Saroj & Chinmaya Patel  
NTPC
15.11.22  

Table of Contents
=================
* 1 [Introduction](#1-introduction)
  * 1.1 [Document Purpose](#11-document-purpose)
  * 1.2 [Product Scope](#12-product-scope)
  * 1.3 [Definitions, Acronyms and Abbreviations](#13-definitions-acronyms-and-abbreviations)
  * 1.4 [References](#14-references)
  * 1.5 [Document Overview](#15-document-overview)
* 2 [Product Overview](#2-product-overview)
  * 2.1 [Product Perspective](#21-product-perspective)
  * 2.2 [Product Functions](#22-product-functions)
  * 2.3 [Product Constraints](#23-product-constraints)
  * 2.4 [User Characteristics](#24-user-characteristics)
  * 2.5 [Assumptions and Dependencies](#25-assumptions-and-dependencies)
  * 2.6 [Apportioning of Requirements](#26-apportioning-of-requirements)
* 3 [Requirements](#3-requirements)
  * 3.1 [External Interfaces](#31-external-interfaces)
    * 3.1.1 [User Interfaces](#311-user-interfaces)
    * 3.1.2 [Hardware Interfaces](#312-hardware-interfaces)
    * 3.1.3 [Software Interfaces](#313-software-interfaces)
  * 3.2 [Functional](#32-functional)
  * 3.3 [Quality of Service](#33-quality-of-service)
    * 3.3.1 [Performance](#331-performance)
    * 3.3.2 [Security](#332-security)
    * 3.3.3 [Reliability](#333-reliability)
    * 3.3.4 [Availability](#334-availability)
  * 3.4 [Compliance](#34-compliance)
  * 3.5 [Design and Implementation](#35-design-and-implementation)
    * 3.5.1 [Installation](#351-installation)
    * 3.5.2 [Distribution](#352-distribution)
    * 3.5.3 [Maintainability](#353-maintainability)
    * 3.5.4 [Reusability](#354-reusability)
    * 3.5.5 [Portability](#355-portability)
    * 3.5.6 [Cost](#356-cost)
    * 3.5.7 [Deadline](#357-deadline)
    * 3.5.8 [Proof of Concept](#358-proof-of-concept)
* 4 [Verification](#4-verification)
* 5 [Appendixes](#5-appendixes)

## 1. Introduction
This project is developed by Pawan Saroj and Chinmaya Patel during their period of Executive IT Training for NTPC Limited India at ESCI, Hyderabad.

### 1.1 Document Purpose
This project is a PHP project with MySQL integration for the purpose of proving knowledge in the domain required for Training purposes.

### 1.2 Product Scope
This project is an e-learning platform solely fulfilling the purposes of a learning project. It's features are:

#### Login
* Admin Login
* Employee Register to Access platform of e-learn
* Admin will approve the employee
* Employee Login
#### Profile
* Update Profile
* Change Password
#### Admin Roles
* Admin shall have option to add course materials
  * Add Course details
  * Edit Course details
  * Delete Course details
  * List Course details
#### Employee Roles
* List Course Details

### 1.3 Definitions, Acronyms and Abbreviations

### 1.4 References
* Web Template: https://demo.phpjabbers.com/free-web-templates/blog-website-template-173/

### 1.5 Document Overview
This SRS Document contains the details of what are the roles and how to use the features mentioned.

## 2. Product Overview
#### Login
* Admin Login
  * HTML,CSS,Bootstrap Forms with PHP integration for verification and permitting employee access for the e-learning platform
* Employee Register to Access platform of e-learn
  * HTML,CSS,Bootstrap Forms with PHP integration for verification and registering for the employee for requesting access from the admin.
* Admin will approve the employee
  * HTML,CSS,Bootstrap Forms with PHP integration for permitting access to the requesting employees.
* Employee Login
  * HTML,CSS,Bootstrap Forms with PHP integration for verifying and authenticating the employee on the e-learning platform.
#### Profile
* Update Profile
  * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
* Change Password
  * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
#### Admin Roles
* Admin shall have option to add course materials
  * Add Course details
    * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
  * Edit Course details
    * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
  * Delete Course details
    * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
  * List Course details
    * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.
#### Employee Roles
* List Course Details
  * HTML,CSS,Bootstrap Forms with PHP integration for CRUD applications with MySQL Server.

### 2.1 Product Perspective
This project is developed as an UI with little CRUD applications to act like Knowledge Management System referred as e-Learning Platform.

### 2.2 Product Functions
#### Login
* Admin Login
  * Admin shall provide login credentials and login after authentication.
  * Admin shall be able to grant and revoke access to the employees to the e-learning platform.
* Employee Register to Access platform of e-learn
  * Employess shall register themselves on the form after providing credentials.
* Admin will approve the employee
  * Registering employees shall provide the credentials which shall be received and displayed at this form where these shall be approved or rejected by the admin.
* Employee Login
  * Form to login to the e-learning platform shall be displayed here.
  * After credentials are provided by the empoyee shall be authenticated and then access to the e-learning platform shall be permitted.
#### Profile
* Update Profile
  * Employee after login onto the e-laerning platform shall be able to edit their details.
* Change Password
  * Employee shall be able to change their password to th ee-learning platform using this form.
#### Admin Roles
* Admin shall have option to add course materials (Text, Audio, Video format)
  * Add Course details
    * Upload Course(s) and details
  * Edit Course details
    * Edit Course(s) and Details
  * Delete Course details
    * Delete Course(s)
  * List Course details
    * View the list of all courses and details as Sub-links.
#### Employee Roles
* List Course Details
  * View the list of all courses and details as Sub-links.

### 2.3 Product Constraints
The limitations faced during the development:  

* Due to limitations on the deployment storage space. Not all features decided shall be provided such as Virtual Authentication, Token Authentication, Virtual Security, Variety of Topics on Learning.  
* Due to limited storage and non-premium deployment service, the quality and speed of the web client shall not be perfect to the human eye.
* Standards compliance - Follows no Licenses - Free-to-view License.
* Not intended for Commercial purposes.

### 2.4 User Characteristics
Three User classifications:
#### Developer
  * Develop and Maintain the features, functions and UI of the Web Application.
  * Use the contents of the Web Client.
#### Admin
  * Grant and revoke access to the employees registering on the e-learning platform.
  * Use the contents of the Web Client.
#### Employee
  * Use the contents of the Web Client.

### 2.5 Assumptions and Dependencies
* Web Template: https://demo.phpjabbers.com/free-web-templates/blog-website-template-173/
* MySQL Server for Databse integration purposes
* PHP for Back-end connectivity, Server implementation and DOM manipulations.
* Javascript for Dom Interactions and manipulations.
* Bootstrap.css, owl.css, custom.css for styling purposes.

### 2.6 Apportioning of Requirements
Apportion the software requirements to software elements. For requirements that will require implementation over multiple software elements, or when allocation to a software element is initially undefined, this should be so stated. A cross reference table by function and software element should be used to summarize the apportioning.

## 3. Requirements
* MySQL Server
* PHP for CRUD applications and connectivity to MySQL Database.
* HTML for UI Development
* CSS and CSS packages for styling the UI

#### 3.1.1 User interfaces

#### Login
* Admin Login
  * Login form page.
  * Authenticate credentials with the Database using CRUD operations.
* Employee Register to Access platform of e-learn
  * Form to add credentials.
  * Credentials to be provided to the Admin.
* Admin will approve the employee
  * After credntials are provided to Admin they are approved or rejected.
  * If approved, add the approved credentials to DB. 1 or more using checkboxes on tables.
* Employee Login
  * Login form page.
  * Authenticate credentials with the Database using CRUD operations.
#### Profile
* Update Profile
  * Form to Update profile details.
  * After credentilas are verified perform the CRUD operations.
* Change Password
  * Form to update password.
  * After credentilas are verified perform the CRUD operations.
#### Admin Roles
* Admin shall have option to add course materials
  * Add Course details
    * CRUD operations to Add Course and details
  * Edit Course details
    * CRUD operations to Edit Course details.
  * Delete Course details
    * CRUD operations to Delete course details.
  * List Course details
    * CRUD operations to View the list of all courses.
#### Employee Roles
* List Course Details
  * CRUD operations to View the list of all courses.

## 5. Appendixes
* SRS Template from:
> https://github.com/jam01/SRS-Template
