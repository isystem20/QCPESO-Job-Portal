<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'WebController';
$route['404_override'] = 'errors/cli/error_404';
$route['translate_uri_dashes'] = FALSE;



/* ----------------------------Applicant View---------------------------------- */

/* Log in */ 
 $route['login'] = 'admin/HomeController/UserLogin';                              
/* Home (Profile) */                        
$route['profile'] = 'admin/LoggedUserController/UserHome';
/* Search */                            
$route['search/jobs'] = 'admin/LoggedUserController/SearchJobs';


/* ---------------------------Job Details-------------------------------------- */

/* Saved Jobs */                        
$route['saved-jobs'] = 'admin/LoggedUserController/SavedJobs';
/* My Applications */                   
$route['applied-jobs'] = 'admin/LoggedUserController/UserApplications';
/* My Alerts */                         
$route['job-alerts'] = 'admin/LoggedUserController/UserAlerts';
/* Ask PESO */                          
$route['askPESO'] = 'admin/LoggedUserController/AskPeso';
/* Settings */                          
$route['account-settings'] = 'admin/LoggedUserController/Settings';
                                    


/* ----------------------------Management View--------------------------------- */

/* Applicant View */

    $route['dev/switch/(:any)/(:any)'] = 'admin/DevController/Devmode/$1/$2';
    /* Log in */                            $route['login'] = 'admin/HomeController/UserLogin';
    /* Home (Profile) */                    $route['profile'] = 'admin/LoggedUserController/UserHome';
    /* Search */                            $route['search/jobs'] = 'admin/LoggedUserController/SearchJobs';
        /* Job Details */
    /* Saved Jobs */                        $route['saved-jobs'] = 'admin/LoggedUserController/SavedJobs';
    /* My Applications */                   $route['applied-jobs'] = 'admin/LoggedUserController/UserApplications';
    /* My Alerts */                         $route['job-alerts'] = 'admin/LoggedUserController/UserAlerts';
    /* Ask PESO */                          $route['askPESO'] = 'admin/LoggedUserController/AskPeso';
    /* Settings */                          $route['account-settings'] = 'admin/LoggedUserController/Settings';
$route['activate/processor'] = 'WebController/Processor';/* Log in */                                
$route['activate/sendcode'] = 'WebController/SendCode';/* Log in */   
$route['activate/account'] = 'WebController/ActivationPage';/* Log in */   
/* Management View */
$route['manage/verify'] = 'WebController/ActivationPage';/* Log in */    
$route['manage/login'] = 'admin/HomeController/AdminEmployeeLogin';/* Log in */                                
$route['manage'] = 'admin/HomeController/Dashboard';    /* Dashboard */                         
$route['activate/(:any)/(:any)'] = 'WebController/Processor/$1/$2';/* Log in */                       
$route['manage/users-masterlist'] = 'admin/UserController/UserMasterlist';        /* User Masterlist */               
        /* Manage Groups */                 $route['manage/user-groups'] = 'admin/GroupController/Group';
        /* Manage Courses */                 $route['manage/maintenace/user-courses'] = 'admin/CourselistController/Courselist';
        /* Manage Employment Status */                 $route['manage/maintenance/user-status'] = 'admin/EmploymentStatusController/EmploymentStatus';
         /* Manage Account Release */                 $route['manage/account-release'] = 'admin/AccountReleaseController/AccountRelease';
        /* Maintenance */
            /* Language */                  $route['manage/maintenance/languages'] = 'admin/LanguageController/Languages';
            /* Licenses */                  $route['manage/maintenance/licenses'] = 'admin/LicenseController/Licenses';
            /* Certificates */              $route['manage/maintenance/certificates'] = 'admin/CertificatesController/CertificatesList';
            /* Disabilities */              $route['manage/maintenance/disabilities'] = 'admin/DisabilitiesController/Disabilities';
            /* Dress Code */                $route['manage/maintenance/dresscode'] = 'admin/DresscodeController/Dresscode';
            
            /* Preferred Locations */       $route['manage/maintenance/preferred-locations'] = 'admin/LocationController/Location';
            /* Job titles */                $route['manage/maintenance/job-titles'] = 'admin/JobtitlesController/Jobtitles';
            /* Categories */                $route['manage/maintenance/applicant-categories'] = 'admin/CategoriesController/Categories';

            /* Applicant Level */           $route['manage/maintenance/applicant-level'] = 'admin/ApplicantLevelController/ApplicantLevel';

            /* Employment Types */           $route['manage/maintenance/employment-types'] = 'admin/EmploymentTypesController/EmploymentTypes';

            /* Skills */                     $route['manage/maintenance/skills'] = 'admin/SkillsController/Skills';


             /* Industries */                $route['manage/maintenance/industries'] = 'admin/IndustriesController/Industries';

        /* Reviews and Ratings */           $route['manage/reviews-and-ratings'] = 'admin/RnrController/ReviewAndRatings';
        /* Surveys */                       $route['manage/surveys'] = 'admin/SurveyController/Survey';
            $route['manage/do/applicants/job-applications-masterlist'] = 'admin/JobApplicationController/Read';

    /* TRANSACTIONS */
        /* Applicants */ 
            // /* Add walk-in */               $route['manage/do/applicants/add'] = 'admin/ApplicantController/ApplicantInfo';
            //  View List                  $route['manage/do/applicants/view-list'] = 'admin/ApplicantController/Masterlist';
            /* Job Applications */          $route['manage/do/applicants/job-applications'] = 'admin/JobApplicationController/JobApplication';
        /* Establishment */ 
            /* Add new */                   $route['manage/do/establishments/add'] = 'admin/EmployerController/EmployerRegistration';
            /* View List */                 $route['manage/do/establishments/view-list'] = 'admin/EmployerController/EstablishmentMasterlist';
            /* Pending Accreditation */     $route['manage/do/establishments/pending-accreditation'] = 'admin/EmployerController/PendingRequest';   
        /* Jobs */ 
            /* Add new */                   $route['manage/do/jobs/add'] = 'admin/JobsController/NewJob';       
            /* View Jobs */                 $route['manage/do/jobs/view-list'] = 'admin/JobsController/ViewJobs';  
            /* Pending Job Posting */       $route['manage/do/jobs/pending-job-posts'] = 'admin/JobsController/PendingJobs';      


/* Log in */
$route['manage/login'] = 'admin/HomeController/AdminEmployeeLogin';  
/* Dashboard */
$route['manage'] = 'admin/HomeController/Dashboard';

/* ---------------------------ERROR-------------------------------------------- */

$route['403'] = 'SiteErrorController/Error403';
$route['admin/login/auth'] = 'web/LoginController/authenticate';
$route['admin/login'] = 'admin/AuthenticationController/LoginPage';
$route['404'] = 'admin/SiteErrorController/Error404';
$route['Underconstruction'] = 'SiteErrorController/Underconstruction';
                            
/* -------------------------MANAGE/ACCOUNT AND ACCESS----------------------------*/

/* Manage Groups */                 
$route['manage/user-groups'] = 'admin/GroupController/Group';
//Group (CREATE, UPDATE, DELETE, READ)
        $route['admin/group/add'] = 'admin/GroupController/Create'; 
        $route['admin/group/edit'] = 'admin/GroupController/Update'; 
        $route['admin/group/del'] = 'admin/GroupController/Delete'; 
        $route['admin/group/read'] = 'admin/GroupController/Read'; 

/* Modules */ 
$route['manage/modules'] = 'admin/ModulesController/Modules';
//Modules (CREATE, UPDATE, DELETE, READ)
$route['admin/modules/add'] = 'admin/ModulesController/Create'; 
        $route['admin/modules/edit'] = 'admin/ModulesController/Update'; 
        $route['admin/modules/del'] = 'admin/ModulesController/Delete'; 
        $route['admin/modules/read'] = 'admin/ModulesController/Read'; 

/* User Masterlist */
$route['manage/users-masterlist'] = 'admin/UserController/UserMasterlist';

/* -------------------------MANAGE/MAINTENANCE----------------------------------*/

/* Account Release */                          
$route['manage/account-release'] = 'admin/AccountReleaseController/AccountRelease';
//AccountRelease (CREATE, UPDATE, DELETE, READ)
        $route['admin/accountrelease/add'] = 'admin/AccountReleaseController/Create'; 
        $route['admin/accountrelease/edit'] = 'admin/AccountReleaseController/Update'; 
        $route['admin/accountrelease/del'] = 'admin/AccountReleaseController/Delete'; 
        $route['admin/accountrelease/read'] = 'admin/AccountReleaseController/Read';

/* Applicant Level */           
$route['manage/maintenance/applicant-level'] = 'admin/ApplicantLevelController/ApplicantLevel';
//Applicant Level (CREATE, UPDATE, DELETE, READ)
        $route['admin/applicantlevel/add'] = 'admin/ApplicantLevelController/Create';
        $route['admin/applicantlevel/edit'] = 'admin/ApplicantLevelController/Update';
        $route['admin/applicantlevel/del'] = 'admin/ApplicantLevelController/Delete';
        $route['admin/applicantlevel/read'] = 'admin/ApplicantLevelController/Read';

/* Categories */                
$route['manage/maintenance/applicant-categories'] = 'admin/CategoriesController/Categories';
//Categories (CREATE, UPDATE, DELETE, READ)
        $route['admin/categories/add'] = 'admin/CategoriesController/Create'; 
        $route['admin/categories/edit'] = 'admin/CategoriesController/Update'; 
        $route['admin/categories/del'] = 'admin/CategoriesController/Delete'; 
        $route['admin/categories/read'] = 'admin/CategoriesController/Read'; 

/* Certificates */              
$route['manage/maintenance/certificates'] = 'admin/CertificatesController/CertificatesList';
//Certificates (CREATE, UPDATE, DELETE, READ)
        $route['admin/certificates/add'] = 'admin/CertificatesController/Create';
        $route['admin/certificates/edit'] = 'admin/CertificatesController/Update';
        $route['admin/certificates/del'] = 'admin/CertificatesController/Delete';
        $route['admin/certificates/read'] = 'admin/CertificatesController/Read';

/* Cities */                     
$route['manage/maintenance/cities'] = 'admin/CitiesController/Cities';
//Cities (CREATE, UPDATE, DELETE, READ)
        $route['admin/cities/add'] = 'admin/CitiesController/Create'; 
        $route['admin/cities/edit'] = 'admin/CitiesController/Update'; 
        $route['admin/cities/del'] = 'admin/CitiesController/Delete'; 
        $route['admin/cities/read'] = 'admin/CitiesController/Read'; 

/* Country List */
$route['manage/maintenance/countries'] = 'admin/CountriesController/Countries';
//Country List (CREATE, UPDATE, DELETE, READ)
        $route['admin/countries/add'] = 'admin/CountriesController/Create'; 
        $route['admin/countries/edit'] = 'admin/CountriesController/Update'; 
        $route['admin/countries/del'] = 'admin/CountriesController/Delete'; 
        $route['admin/countries/read'] = 'admin/CountriesController/Read';

/* Courses List */
$route['manage/maintenace/user-courses'] = 'admin/CourselistController/Courselist';
//Course list (CREATE, UPDATE, DELETE, READ)
        $route['admin/course/add'] = 'admin/CourselistController/Create'; 
        $route['admin/course/edit'] = 'admin/CourselistController/Update'; 
        $route['admin/course/del'] = 'admin/CourselistController/Delete'; 
        $route['admin/course/read'] = 'admin/CourselistController/Read'; 

/* Dialect */ 
$route['manage/maintenance/dialect'] = 'admin/DialectController/Dialect';
//Dialect (CREATE, UPDATE, DELETE, READ)
        $route['admin/dialect/add'] = 'admin/DialectController/Create'; 
        $route['admin/dialect/edit'] = 'admin/DialectController/Update'; 
        $route['admin/dialect/del'] = 'admin/DialectController/Delete'; 
        $route['admin/dialect/read'] = 'admin/DialectController/Read';  

/* Disabilities */              
$route['manage/maintenance/disabilities'] = 'admin/DisabilitiesController/Disabilities';
//Disabilities (CREATE, UPDATE, DELETE, READ)
        $route['admin/disabilities/add'] = 'admin/DisabilitiesController/Create';
        $route['admin/disabilities/edit'] = 'admin/DisabilitiesController/Update';
        $route['admin/disabilities/del'] = 'admin/DisabilitiesController/Delete';
        $route['admin/disabilities/read'] = 'admin/DisabilitiesController/Read';

/* Dress Code */                
$route['manage/maintenance/dresscode'] = 'admin/DresscodeController/Dresscode';
//Dresscode (CREATE, UPDATE, DELETE, READ)
        $route['admin/dresscode/add'] = 'admin/DresscodeController/Create';
        $route['admin/dresscode/edit'] = 'admin/DresscodeController/Update';
        $route['admin/dresscode/del'] = 'admin/DresscodeController/Delete';
        $route['admin/dresscode/read'] = 'admin/DresscodeController/Read';

/* Employment Status */                         
$route['manage/maintenance/user-status'] = 'admin/EmploymentStatusController/EmploymentStatus';
//Employment Statuss (CREATE, UPDATE, DELETE, READ)
        $route['admin/employmentstat/add'] = 'admin/EmploymentStatusController/Create'; 
        $route['admin/employmentstat/edit'] = 'admin/EmploymentStatusController/Update'; 
        $route['admin/employmentstat/del'] = 'admin/EmploymentStatusController/Delete'; 
        $route['admin/employmentstat/read'] = 'admin/EmploymentStatusController/Read';  

/* Employment Types */           
$route['manage/maintenance/employment-types'] = 'admin/EmploymentTypesController/EmploymentTypes';
//Employment Types (CREATE, UPDATE, DELETE, READ)
        $route['admin/employmenttypes/add'] = 'admin/EmploymentTypesController/Create';
        $route['admin/employmenttypes/edit'] = 'admin/EmploymentTypesController/Update';
        $route['admin/employmenttypes/del'] = 'admin/EmploymentTypesController/Delete';
        $route['admin/employmenttypes/read'] = 'admin/EmploymentTypesController/Read';

/* Industries */                
$route['manage/maintenance/industries'] = 'admin/IndustriesController/Industries';
//Industries (CREATE, UPDATE, DELETE, READ)
        $route['admin/industries/add'] = 'admin/IndustriesController/Create'; 
        $route['admin/industries/edit'] = 'admin/IndustriesController/Update'; 
        $route['admin/industries/del'] = 'admin/IndustriesController/Delete'; 
        $route['admin/industries/read'] = 'admin/IndustriesController/Read';

/* Job titles */                
$route['manage/maintenance/job-titles'] = 'admin/JobtitlesController/Jobtitles';
//Job Titles (CREATE, UPDATE, DELETE, READ)
        $route['admin/job-titles/add'] = 'admin/JobtitlesController/Create';
        $route['admin/job-titles/edit'] = 'admin/JobtitlesController/Update';
        $route['admin/job-titles/del'] = 'admin/JobtitlesController/Delete';
        $route['admin/job-titles/read'] = 'admin/JobtitlesController/Read';

/* Language */                  
$route['manage/maintenance/languages'] = 'admin/LanguageController/Languages';
//Languages (CREATE, UPDATE, DELETE, READ)
        $route['admin/languages/add'] = 'admin/LanguageController/Create';
        $route['admin/languages/edit'] = 'admin/LanguageController/Update';
        $route['admin/languages/del'] = 'admin/LanguageController/Delete';
        $route['admin/languages/read'] = 'admin/LanguageController/Read';

/* Licenses */                  
$route['manage/maintenance/licenses'] = 'admin/LicenseController/Licenses';
//Licences (CREATE, UPDATE, DELETE, READ)
        $route['admin/licenses/add'] = 'admin/LicenseController/Create';
        $route['admin/licenses/edit'] = 'admin/LicenseController/Update';
        $route['admin/licenses/del'] = 'admin/LicenseController/Delete';
        $route['admin/licenses/read'] = 'admin/LicenseController/Read';

/* Nationalities */                     
$route['manage/maintenance/nationality'] = 'admin/NationalityController/Nationality';
//Nationality (CREATE, UPDATE, DELETE, READ)
        $route['admin/nationality/add'] = 'admin/NationalityController/Create'; 
        $route['admin/nationality/edit'] = 'admin/NationalityController/Update'; 
        $route['admin/nationality/del'] = 'admin/NationalityController/Delete'; 
        $route['admin/nationality/read'] = 'admin/NationalityController/Read'; 

/* Preferred Locations */       
$route['manage/maintenance/preferred-locations'] = 'admin/LocationController/Location';
//Preferred Locations (CREATE, UPDATE, DELETE, READ)
        $route['admin/preferred-locations/add'] = 'admin/LocationController/Create';
        $route['admin/preferred-locations/edit'] = 'admin/LocationController/Update';
        $route['admin/preferred-locations/del'] = 'admin/LocationController/Delete';
        $route['admin/preferred-locations/read'] = 'admin/LocationController/Read';

/* Regions */                     
$route['manage/maintenance/region'] = 'admin/RegionController/Region';
//Regions (CREATE, UPDATE, DELETE, READ) (CREATE, UPDATE, DELETE, READ)
        $route['admin/region/add'] = 'admin/RegionController/Create'; 
        $route['admin/region/edit'] = 'admin/RegionController/Update'; 
        $route['admin/region/del'] = 'admin/RegionController/Delete'; 
        $route['admin/region/read'] = 'admin/RegionController/Read';        

/* Skills */                     
$route['manage/maintenance/skills'] = 'admin/SkillsController/Skills';
//Skills (CREATE, UPDATE, DELETE, READ)
        $route['admin/skills/add'] = 'admin/SkillsController/Create';
        $route['admin/skills/edit'] = 'admin/SkillsController/Update';
        $route['admin/skills/del'] = 'admin/SkillsController/Delete';
        $route['admin/skills/read'] = 'admin/SkillsController/Read';


        
/* -------------------------MANAGE/SURVEY AND RATINGS----------------------------*/

/* Survey and Ratings Masterlist */         
$route['manage/maintenance/SurveyAndRatings'] = 'admin/SurveyAndRatingsController/SurveyAndRatings';
// Survey And Ratings list (CREATE, UPDATE, DELETE, READ)
        $route['admin/surveyandratings/add'] = 'admin/SurveyAndRatingsController/Create'; 
        $route['admin/surveyandratings/edit'] = 'admin/SurveyAndRatingsController/Update'; 
        $route['admin/surveyandratings/del'] = 'admin/SurveyAndRatingsController/Delete'; 
        $route['admin/surveyandratings/read'] = 'admin/SurveyAndRatingsController/Read'; 

/* Reviews and Ratings */           
$route['manage/reviews-and-ratings'] = 'admin/RnrController/ReviewAndRatings';
/* Surveys */                     
$route['manage/surveys'] = 'admin/SurveyController/Survey';      

/* -------------------------TRANSACTIONS/APPLICANT------------------------------*/

 // /* Add walk-in */ 
$route['manage/applicant/add'] = 'admin/ApplicantController/AddNewApplicant';
$route['account/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';


// $route['manage/do/applicants/add'] = 'admin/ApplicantController/ApplicantInfo';
$route['admin/applicants'] = 'admin/ApplicantController/ApplicantInfo';
$route['admin/applicants'] = 'admin/ApplicantController/ApplicantInfo';
$route['admin/applicants/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1';
$route['admin/applicants/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1';
$route['admin/applicants/(:any)/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1/$2';
$route['admin/applicants/(:any)/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1/$2';

        
$route['admin/applicants/add'] = 'admin/ApplicantController/Create'; 
$route['admin/applicants/edit'] = 'admin/ApplicantController/Update'; 
$route['admin/applicants/del'] = 'admin/ApplicantController/Delete'; 
$route['admin/applicants/read'] = 'admin/ApplicantController/Read'; 

$route['manage/transactions/add-applicant'] = 'admin/ApplicantController/AddNewApplicant'; 
$route['manage/transactions/view-applicant/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';
$route['manage/transactions/update-applicant/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';
$route['manage/transactions/add-applicant/(:any)/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1/$2';
$route['manage/transactions/update-applicant/(:any)/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1/$2';
        
//  View List */
$route['manage/applicant/view-list'] = 'admin/ApplicantController/AllApplicants';
//Applicant list (CREATE, UPDATE, DELETE, READ)
        $route['admin/applicantlist/add'] = 'admin/ApplicantController/Create'; 
        $route['admin/applicantlist/edit'] = 'admin/ApplicantController/Update'; 
        $route['admin/applicantlist/del'] = 'admin/ApplicantController/Delete'; 
        $route['admin/applicantlist/read'] = 'admin/ApplicantController/Read'; 

$route['manage/transactions/applicant'] = 'admin/ApplicantController/AllApplicants';
        $route['admin/applicant/add'] = 'admin/ApplicantController/Create'; 
        $route['admin/applicant/edit'] = 'admin/ApplicantController/Update'; 
        $route['admin/applicant/del'] = 'admin/ApplicantController/Delete'; 
        $route['admin/applicant/read'] = 'admin/ApplicantController/Read';   


// $route['manage/do/applicants/view-list'] = 'admin/ApplicantController/Masterlist';
        $route['admin/applicants/add'] = 'admin/ApplicantController/Create'; 
        $route['admin/applicants/edit'] = 'admin/ApplicantController/Update'; 
        $route['admin/applicants/del'] = 'admin/ApplicantController/Delete'; 
        $route['admin/applicants/read'] = 'admin/ApplicantController/Read'; 
 
 /* Job Applications */          
$route['manage/do/applicants/job-applications'] = 'admin/JobApplicationController/JobApplication';
//JobApplication (CREATE, UPDATE, DELETE, READ)
        $route['admin/jobapplication/add'] = 'admin/JobApplicationController/Create'; 
        $route['admin/jobapplication/edit'] = 'admin/JobApplicationController/Update'; 
        $route['admin/jobapplication/del'] = 'admin/JobApplicationController/Delete'; 
        $route['admin/jobapplication/read'] = 'admin/JobApplicationController/Read'; 

        $route['admin/job-applications/del'] = 'admin/JobApplicationController/Delete'; 

/* -------------------------TRANSACTIONS/ESTABLISHMENT-------------------------*/            
            
 /* Add new */                   
 $route['manage/do/establishments/add'] = 'admin/EmployerController/EmployerRegistration';

        $route['admin/emppost/add'] = 'admin/EmployerController/Create'; 
        $route['admin/emppost/edit'] = 'admin/EmployerController/Update'; 
        $route['admin/emppost/del'] = 'admin/EmployerController/Delete'; 
        $route['admin/emppost/read'] = 'admin/EmployerController/Read'; 
        $route['admin/emppost/edit/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1'; 
        $route['admin/emppost/read/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1';
        $route['admin/emppost/edit/(:any)/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1/$2';

/* View List */                 
$route['manage/do/establishments/view-list'] = 'admin/EmployerController/EstablishmentMasterlist';
//Establishment Masterlist (CREATE, UPDATE, DELETE, READ)
        $route['admin/EstablishmentMasterlist/add'] = 'admin/EstablishmentlistController/Create'; 
        $route['admin/EstablishmentMasterlist/edit'] = 'admin/EstablishmentlistController/Update'; 
        $route['admin/EstablishmentMasterlist/del'] = 'admin/EstablishmentlistController/Delete'; 
        $route['admin/EstablishmentMasterlist/read'] = 'admin/EstablishmentlistController/Read';

/* Pending Accreditation */    
$route['manage/do/establishments/pending-accreditation'] = 'admin/EmployerController/PendingRequest';

/* -------------------------TRANSACTIONS/JOBS---------------------------------*/

/* Add new */                   
$route['manage/do/jobs/add'] = 'admin/JobsController/NewJob';
$route['admin/jobposts/approve'] = 'admin/JobsController/Approve';

$route['manage/do/jobs/addnewjob'] = 'admin/JobsController/AddNewJob'; 
$route['admin/jobposts/del'] = 'admin/JobsController/Delete';
$route['admin/jobposts/edit'] = 'admin/JobsController/Update';
        
$route['manage/do/jobs/add/(:any)'] = 'admin/JobsController/NewJob/$1'; 
$route['manage/do/jobs/update/(:any)'] = 'admin/JobsController/NewJob/$1';
$route['manage/do/jobs/edit/(:any)'] = 'admin/JobsController/NewJob/$1';

$route['manage/do/jobs/add/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';
$route['manage/do/jobs/edit/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';
$route['manage/do/jobs/update/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';

/* View Jobs */                 
$route['manage/do/jobs/view-list'] = 'admin/JobsController/ViewJobs';
// $route['manage/do/jobs/view-list'] = 'PostController/JobPost';  

/* Pending Job Posting */       
$route['manage/do/jobs/pending-job-posts'] = 'admin/JobsController/PendingJobs'; 
            
/* -------------------------REPORTS/APPLICANT---------------------------------*/

/* Masterlist */        
$route['manage/reports/applicants'] = 'reports/ReportsMasterlistController/ReportsMasterlist';
/* Masterlist */         
// $route['manage/reports/applicants'] = 'admin/ReportController/ApplicantReport';
/* Applications*/      
$route['manage/reports/reportsapplications'] = 'reports/ReportsApplicationsController/ReportsApplications'; 
/* Custom Reports*/    
$route['manage/reports/reportscustom'] = 'reports/ReportsCustomController/ReportsCustom';           

/* -------------------------REPORTS/ESTABLISHMENT------------------------------*/

/* Masterlist*/        
$route['manage/reports/reportsestablishmentsmasterlist'] = 'reports/ReportsEstablishmentsMasterlistController/ReportsEstablishmentsMasterlist';
/* Post Jobs*/         
$route['manage/reports/reportsestablishmentspostedjobs'] = 'reports/ReportsEstablishmentsPostedJobsController/ReportsEstablishmentsPostedJobs';
/* Reviw and Ratings*/ 
$route['manage/reports/reportsestablishmentreviewandratings'] = 'reports/ReportsEstablishmentsReviewController/ReportsEstablishmentsReview';         
/* Custom Reports*/    
$route['manage/reports/reportsestablishmentcustom'] = 'reports/ReportsEstablishmentsCustomController/ReportsEstablishmentsCustom';         
         
/* Establishments Masterlist */     
$route['manage/reports/establishments'] = 'admin/ReportController/EstablishmentReports';          
/* Referral Reports */              $route['manage/reports/referrals'] = 'admin/ReportController/ReferralReports';         
/* Successful Hires */              
$route['manage/reports/successful-hires'] = 'admin/ReportController/SuccessfulHires'; 
/* Feedbacks */                     
$route['manage/reports/feedbacks'] = 'admin/ReportController/Feedbacks'; 
/* Establishment Ratings */         
$route['manage/reports/establishment-ratings'] = 'admin/ReportController/EstablishmentRatings'; 
/* Survey Summary */                
$route['manage/reports/survey-summary'] = 'admin/ReportController/SurverSummary'; 

/* Post Types */                    
$route['manage/settings/add-post-types'] = 'admin/WebPostsTypesController/PostTypes';
//Post Types (CREATE, UPDATE, DELETE, READ)
        $route['admin/posttypes/add'] = 'admin/WebPostsTypesController/Create'; 
        $route['admin/posttypes/edit'] = 'admin/WebPostsTypesController/Update'; 
        $route['admin/posttypes/del'] = 'admin/WebPostsTypesController/Delete'; 
        $route['admin/posttypes/read'] = 'admin/WebPostsTypesController/Read'; 

/* -------------------------REPORTS/ACCOUNTS------------------------------------*/

/* Masterlist*/        
$route['manage/reports/reportsaccountsmasterlist'] = 'reports/ReportsAccountsMasterlistController/ReportsAccountsMasterlist';
/* Access list*/       
$route['manage/reports/reportsaccountsaccesslist'] = 'reports/ReportsAccountsAccesslistController/ReportsAccountsAccesslist';
/* Custom Reports*/    
$route['manage/reports/reportsaccountscustom'] = 'reports/ReportsAccountsCustomController/ReportsAccountsCustom';

/* -------------------------REPORTS/ACTIVITY LOGS-------------------------------*/

/* Activity Logs */     
$route['manage/reports/reportsactivitylog'] = 'reports/ReportsActivitylogController/ReportsActivitylog';

/* -------------------------SETTINGS/WEBSITE/POSTS------------------------------*/

/* Add Posts */                     
$route['manage/settings/add-web-post'] = 'admin/WebPostsController/AddWebPosts';
//Add Posts (CREATE, UPDATE, DELETE, READ)
        $route['admin/webposts/add'] = 'admin/WebPostsController/Create'; 
        $route['admin/webposts/edit'] = 'admin/WebPostsController/Update'; 
        $route['admin/webposts/del'] = 'admin/WebPostsController/Delete'; 
        $route['admin/webposts/read'] = 'admin/WebPostsController/Read';

/* All Posts */ 
$route['manage/settings/all-web-post'] = 'admin/WebPostsController/AllWebPosts';

$route['manage/settings/add-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2';
$route['manage/settings/add-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2';
$route['manage/settings/view-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';        
$route['manage/settings/view-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';
$route['manage/settings/update-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';
$route['manage/settings/update-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2'; 

/* Post Types */ 
$route['manage/settings/types'] = 'admin/TypesController/Types';
//Post Types (CREATE, UPDATE, DELETE, READ)
$route['admin/types/add'] = 'admin/TypesController/Create'; 
        $route['admin/types/edit'] = 'admin/TypesController/Update'; 
        $route['admin/types/del'] = 'admin/TypesController/Delete'; 
        $route['admin/types/read'] = 'admin/TypesController/Read'; 

/* Post Tags */ 
$route['manage/settings/tags'] = 'admin/TagsController/Tags';
//Post Tags (CREATE, UPDATE, DELETE, READ)
$route['admin/tags/add'] = 'admin/TagsController/Create'; 
        $route['admin/tags/edit'] = 'admin/TagsController/Update'; 
        $route['admin/tags/del'] = 'admin/TagsController/Delete'; 
        $route['admin/tags/read'] = 'admin/TagsController/Read'; 

/* -------------------------SETTINGS/WEBSITE/SERVICES---------------------------*/

/* Add Services */ 
$route['manage/settings/add-services'] = 'admin/ServicesController/AddServices'; 

$route['manage/settings/services'] = 'admin/ServicesController/Services';
$route['manage/settings/view-services/(:any)'] = 'admin/ServicesController/AddServices/$1';
$route['manage/settings/add-services/(:any)/(:any)'] = 'admin/ServicesController/AddServices/$1/$2';
$route['manage/settings/update-services/(:any)'] = 'admin/ServicesController/AddServices/$1';
$route['manage/settings/update-services/(:any)/(:any)'] = 'admin/ServicesController/AddServices/$1/$2';

/* All Services */ 
$route['manage/settings/all-services'] = 'admin/ServicesController/AllServices';
//All Services (CREATE, UPDATE, DELETE, READ)
$route['admin/services/add'] = 'admin/ServicesController/Create'; 
        $route['admin/services/edit'] = 'admin/ServicesController/Update'; 
        $route['admin/services/del'] = 'admin/ServicesController/Delete'; 
        $route['admin/services/read'] = 'admin/ServicesController/Read'; 

/* -------------------------SETTINGS/SYSTEM-----------------------------------*/

/* Security*/                  
$route['manage/system/security'] = 'admin/SecurityController/Security';
/* Server and Database*/       
$route['manage/system/serveranddatabase'] = 'admin/ServerandDatabaseController/ServerandDatabase';
/* Notification*/              
$route['manage/system/notification'] = 'admin/NotificationController/Notification';

/* -------------------------SETTINGS/CHANGE LOGS-------------------------------*/

/* Change Logs*/              
$route['manage/settings/changelogs'] = 'admin/ChangeLogsController/ChangeLogs';

$route['changelog'] = 'admin/HomeController/Changelog';

/* -------------------------LOGIN, LOGOUT AND REGISTER-------------------------*/

$route['web/register'] = 'web/RegisterController/register';    
$route['web/register/applicant'] = 'web/RegisterController/CreateApplicant';
$route['web/login/applicant'] = 'web/LoginController/authenticate';
$route['web/logout'] = 'WebController/logout';
$route['logout'] = 'WebController/logout';        

/* -------------------------APPLICANT-----------------------------------------*/

$route['applicant/BrowseJobs'] = 'applicant/ApplicantBrowseJobsController/ApplicantBrowseJobs';
$route['applicant/Dashboard'] = 'applicant/ApplicantDashboardController/ApplicantDashboard';
$route['applicant/Notification'] = 'applicant/ApplicantNotificationsController/ApplicantNotifications';
$route['applicant/MyAlerts'] = 'applicant/MyAlertsController/MyAlerts';
$route['applicant/MyApplication'] = 'applicant/MyApplicationController/MyApplication';

$route['web/browsejob'] = 'web/BrowseJobController/browsejob';
$route['web/JobDescription/(:any)'] = 'web/BrowseJobController/BrowseJobDescription/$1';

$route['manage/transactions/all-applicant'] = 'admin/ApplicantController/AllApplicants';

$route['admin/myapplication/del'] = 'applicant/MyApplicationController/Delete';

$route['admin/employee/add'] = 'admin/EmployeesController/Create';
$route['manage/employee/add'] = 'admin/EmployeesController/AddNewEmployees';
$route['admin/employee/edit'] = 'admin/EmployeesController/Update'; // POST to edit
$route['admin/employee/del'] = 'admin/EmployeesController/Delete'; // POST to delete
$route['admin/employee/read'] = 'admin/EmployeesController/Read'; // POST to view
$route['manage/employee/view-employee/(:any)'] = 'admin/EmployeesController/AddNewEmployees/$1';
$route['manage/employee/add-employee/(:any)/(:any)'] = 'admin/EmployeesController/AddNewEmployees/$1/$2';
$route['manage/employee/update-employee/(:any)'] = 'admin/EmployeesController/AddNewEmployees/$1';
$route['manage/employee/update-employee/(:any)/(:any)'] = 'admin/EmployeesController/AddNewEmployees/$1/$2';
$route['manage/employees-masterlist'] = 'admin/EmployeesController/AllEmployees';
$route['manage/employerdashboard'] = 'employer/EmployerController/Employer';
//JobApplication Process 
$route['admin/jobapplication/process'] = 'admin/JobApplicationController/Update1'; 
   
$route['web/job'] = 'web/JobController/Job';
$route['web/hiring'] = 'web/HiringController/Hiring';
