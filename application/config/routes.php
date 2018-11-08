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
$route['404_override'] = 'admin/SiteErrorController/Error404';
$route['translate_uri_dashes'] = FALSE;


/* Applicant View */


    /* Log in */                            $route['login'] = 'admin/HomeController/UserLogin';
    /* Home (Profile) */                    $route['profile'] = 'admin/LoggedUserController/UserHome';
    /* Search */                            $route['search/jobs'] = 'admin/LoggedUserController/SearchJobs';
        /* Job Details */
    /* Saved Jobs */                        $route['saved-jobs'] = 'admin/LoggedUserController/SavedJobs';
    /* My Applications */                   $route['applied-jobs'] = 'admin/LoggedUserController/UserApplications';
    /* My Alerts */                         $route['job-alerts'] = 'admin/LoggedUserController/UserAlerts';
    /* Ask PESO */                          $route['askPESO'] = 'admin/LoggedUserController/AskPeso';
    /* Settings */                          $route['account-settings'] = 'admin/LoggedUserController/Settings';
                                    


/* Management View */

/* Log in */                                $route['manage/login'] = 'admin/HomeController/AdminEmployeeLogin';
    /* Dashboard */                         $route['manage'] = 'admin/HomeController/Dashboard';
    /* MANAGE */                        
        /* User Masterlist */               $route['manage/users-masterlist'] = 'admin/UserController/UserMasterlist';
        /* Manage Groups */                 $route['manage/user-groups'] = 'admin/GroupController/GroupMasterlist';
        /* Maintenance */
            /* Language */                  $route['manage/maintenance/languages'] = 'admin/LanguageController/LanguageList';
            /* Licenses */                  $route['manage/maintenance/licenses'] = 'admin/LicenseController/LicenseList';
            /* Certificates */              $route['manage/maintenance/certificates'] = 'admin/CertificateController/CertificatesMasterlist';
            /* Disabilities */              $route['manage/maintenance/disabilities'] = 'admin/ApplicantController/DisabilitiesMasterlist';
            
            /* Preferred Locations */       $route['manage/maintenance/preferred-locations'] = 'admin/EmployeeController/PreferredLocation';
            /* Job titles */                $route['manage/maintenance/job-titles'] = 'admin/EmployeeController/JobTitles';
            /* Categories */                $route['manage/maintenance/applicant-categories'] = 'admin/EmployeeController/Categories';
        /* Reviews and Ratings */           $route['manage/reviews-and-ratings'] = 'admin/RnrController/ReviewAndRatings';
        /* Surveys */                       $route['manage/surveys'] = 'admin/SurveyController/Survey';


    /* TRANSACTIONS */
        /* Applicants */ 
            /* Add walk-in */               $route['manage/do/applicants/add'] = 'admin/ApplicantController/ApplicantRegistration';
            /* View List */                 $route['manage/do/applicants/view-list'] = 'admin/ApplicantController/ApplicantMasterlist';
            /* Job Applications */          $route['manage/do/applicants/job-applications'] = 'admin/JobApplicationController/ApplicationMasterList';
        /* Establishment */ 
            /* Add new */                   $route['manage/do/establishments/add'] = 'admin/EmployerController/EmployerRegistration';
            /* View List */                 $route['manage/do/establishments/view-list'] = 'admin/EmployerController/EmployerMasterlist';
            /* Pending Accreditation */     $route['manage/do/establishments/pending-accreditation'] = 'admin/AccreditationController/AccreditationRequest';   
        /* Jobs */ 
            /* Add new */                   $route['manage/do/jobs/add'] = 'admin/JobController/JobRegistration';       
            /* View Jobs */                 $route['manage/do/jobs/view-list'] = 'admin/JobController/JobMasterlist';  
            /* Pending Job Posting */       $route['manage/do/jobs/pending-job-posts'] = 'admin/JobController/PendingJobMasterlist';      

    /* REPORTS */
        /* Applicants Masterlist */         $route['manage/reports/applicants'] = 'admin/ReportController/ApplicantReport'; 
        /* Establishments Masterlist */     $route['manage/reports/establishments'] = 'admin/ReportController/EstablishmentReports'; 
        /* Referral Reports */              $route['manage/reports/referrals'] = 'admin/ReportController/ReferralReports'; 
        /* Successful Hires */              $route['manage/reports/successful-hires'] = 'admin/ReportController/SuccessfulHires'; 
        /* Feedbacks */                     $route['manage/reports/feedbacks'] = 'admin/ReportController/Feedbacks'; 
        /* Establishment Ratings */         $route['manage/reports/establishment-ratings'] = 'admin/ReportController/EstablishmentRatings'; 
        /* Survey Summary */                $route['manage/reports/survey-summary'] = 'admin/ReportController/SurverSummary'; 

// $route['manage/do/jobs/view-list'] = 'PostController/JobPost';


/* Developers */
                                            $route['changelog'] = 'admin/HomeController/Changelog';




$route['web/register/applicant'] = 'web/RegisterController/CreateApplicant';
$route['web/login/applicant'] = 'web/LoginController/authenticate';


$route['web/logout'] = 'WebController/logout';



//ERRORS

$route['403'] = 'admin/SiteErrorController/Error403';
$route['admin/login/auth'] = 'admin/AuthenticationController/AuthenticateAdmin';