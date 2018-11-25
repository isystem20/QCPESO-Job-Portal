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

$route['manage/login'] = 'admin/HomeController/AdminEmployeeLogin';/* Log in */                                
$route['manage'] = 'admin/HomeController/Dashboard';    /* Dashboard */                         
    /* MANAGE */                        
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


    /* TRANSACTIONS */
        /* Applicants */ 
            /* Add walk-in */               $route['manage/do/applicants/add'] = 'admin/ApplicantController/ApplicantInfo';
            /* View List */                 $route['manage/do/applicants/view-list'] = 'admin/ApplicantMasterlistController/ApplicantMasterlist';
            /* Job Applications */          $route['manage/do/applicants/job-applications'] = 'admin/JobApplicationController/ApplicationMasterList';
        /* Establishment */ 
            /* Add new */                   $route['manage/do/establishments/add'] = 'admin/EmployerController/EmployerInfo';
            /* View List */                 $route['manage/do/establishments/view-list'] = 'admin/EstablishmentController/EstablishmentMasterlist';
            /* Pending Accreditation */     $route['manage/do/establishments/pending-accreditation'] = 'admin/AccreditationController/AccreditationRequest';   
        /* Jobs */ 
            /* Add new */                   $route['manage/do/jobs/add'] = 'admin/JobsController/NewJob';       
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
        /* Add Posts */                     $route['manage/settings/add-web-post'] = 'admin/WebPostsController/AddWebPosts'; 
        /* Post Types */                    $route['manage/settings/add-post-types'] = 'admin/WebPostsTypesController/PostTypes';

        
// $route['manage/do/jobs/view-list'] = 'PostController/JobPost';


/* Developers */
                                            $route['changelog'] = 'admin/HomeController/Changelog';




$route['web/register/applicant'] = 'web/RegisterController/CreateApplicant';
$route['web/login/applicant'] = 'web/LoginController/authenticate';


$route['web/logout'] = 'WebController/logout';



//ERRORS

$route['403'] = 'admin/SiteErrorController/Error403';
$route['admin/login/auth'] = 'admin/AuthenticationController/AuthenticateAdmin';
$route['admin/login'] = 'admin/AuthenticationController/LoginPage';



// MAINTENANCE (CREATE, READ, UPDATE, DELETE)

        //Languages
        $route['admin/languages/add'] = 'admin/LanguageController/Create';
        $route['admin/languages/edit'] = 'admin/LanguageController/Update';
        $route['admin/languages/del'] = 'admin/LanguageController/Delete';
        $route['admin/languages/read'] = 'admin/LanguageController/Read';

        //Licences
        $route['admin/licenses/add'] = 'admin/LicenseController/Create';
        $route['admin/licenses/edit'] = 'admin/LicenseController/Update';
        $route['admin/licenses/del'] = 'admin/LicenseController/Delete';
        $route['admin/licenses/read'] = 'admin/LicenseController/Read';

        //Certificates
        $route['admin/certificates/add'] = 'admin/CertificatesController/Create';
        $route['admin/certificates/edit'] = 'admin/CertificatesController/Update';
        $route['admin/certificates/del'] = 'admin/CertificatesController/Delete';
        $route['admin/certificates/read'] = 'admin/CertificatesController/Read';

        //Disabilities
        $route['admin/disabilities/add'] = 'admin/DisabilitiesController/Create';
        $route['admin/disabilities/edit'] = 'admin/DisabilitiesController/Update';
        $route['admin/disabilities/del'] = 'admin/DisabilitiesController/Delete';
        $route['admin/disabilities/read'] = 'admin/DisabilitiesController/Read';

        //Disabilities
        $route['admin/dresscode/add'] = 'admin/DresscodeController/Create';
        $route['admin/dresscode/edit'] = 'admin/DresscodeController/Update';
        $route['admin/dresscode/del'] = 'admin/DresscodeController/Delete';
        $route['admin/dresscode/read'] = 'admin/DresscodeController/Read';
 
        //Preferred Locations
        $route['admin/preferred-locations/add'] = 'admin/LocationController/Create';
        $route['admin/preferred-locations/edit'] = 'admin/LocationController/Update';
        $route['admin/preferred-locations/del'] = 'admin/LocationController/Delete';
        $route['admin/preferred-locations/read'] = 'admin/LocationController/Read';
          
        //Job Titles
        $route['admin/job-titles/add'] = 'admin/JobtitlesController/Create';
        $route['admin/job-titles/edit'] = 'admin/JobtitlesController/Update';
        $route['admin/job-titles/del'] = 'admin/JobtitlesController/Delete';
        $route['admin/job-titles/read'] = 'admin/JobtitlesController/Read';

        //Categories
        $route['admin/categories/add'] = 'admin/CategoriesController/Create'; //POST to create
        $route['admin/categories/edit'] = 'admin/CategoriesController/Update'; // POST to edit
        $route['admin/categories/del'] = 'admin/CategoriesController/Delete'; // POST to delete
        $route['admin/categories/read'] = 'admin/CategoriesController/Read'; // POST to view

          //industries
        $route['admin/industries/add'] = 'admin/IndustriesController/Create'; //POST to create
        $route['admin/industries/edit'] = 'admin/IndustriesController/Update'; // POST to edit
        $route['admin/industries/del'] = 'admin/IndustriesController/Delete'; // POST to delete
        $route['admin/industries/read'] = 'admin/IndustriesController/Read'; // POST to view

        //Applicant Level
        $route['admin/applicantlevel/add'] = 'admin/ApplicantLevelController/Create';
        $route['admin/applicantlevel/edit'] = 'admin/ApplicantLevelController/Update';
        $route['admin/applicantlevel/del'] = 'admin/ApplicantLevelController/Delete';
        $route['admin/applicantlevel/read'] = 'admin/ApplicantLevelController/Read';

        //Employment Types
        $route['admin/employmenttypes/add'] = 'admin/EmploymentTypesController/Create';
        $route['admin/employmenttypes/edit'] = 'admin/EmploymentTypesController/Update';
        $route['admin/employmenttypes/del'] = 'admin/EmploymentTypesController/Delete';
        $route['admin/employmenttypes/read'] = 'admin/EmploymentTypesController/Read';


         //Group
        $route['admin/group/add'] = 'admin/GroupController/Create'; //POST to create
        $route['admin/group/edit'] = 'admin/GroupController/Update'; // POST to edit
        $route['admin/group/del'] = 'admin/GroupController/Delete'; // POST to delete
        $route['admin/group/read'] = 'admin/GroupController/Read'; // POST to view

         //Courselist
        $route['admin/course/add'] = 'admin/CourselistController/Create'; //POST to create
        $route['admin/course/edit'] = 'admin/CourselistController/Update'; // POST to edit
        $route['admin/course/del'] = 'admin/CourselistController/Delete'; // POST to delete
        $route['admin/course/read'] = 'admin/CourselistController/Read'; // POST to view

         //EmploymentStatuss
        $route['admin/employmentstat/add'] = 'admin/EmploymentStatusController/Create'; //POST to create
        $route['admin/employmentstat/edit'] = 'admin/EmploymentStatusController/Update'; // POST to edit
        $route['admin/employmentstat/del'] = 'admin/EmploymentStatusController/Delete'; // POST to delete
        $route['admin/employmentstat/read'] = 'admin/EmploymentStatusController/Read'; // POST to view

         //AccountRelease
        $route['admin/accountrelease/add'] = 'admin/AccountReleaseController/Create'; //POST to create
        $route['admin/accountrelease/edit'] = 'admin/AccountReleaseController/Update'; // POST to edit
        $route['admin/accountrelease/del'] = 'admin/AccountReleaseController/Delete'; // POST to delete
        $route['admin/accountrelease/read'] = 'admin/AccountReleaseController/Read'; // POST to view

        //industries
        $route['admin/posttypes/add'] = 'admin/WebPostsTypesController/Create'; //POST to create
        $route['admin/posttypes/edit'] = 'admin/WebPostsTypesController/Update'; // POST to edit
        $route['admin/posttypes/del'] = 'admin/WebPostsTypesController/Delete'; // POST to delete
        $route['admin/posttypes/read'] = 'admin/WebPostsTypesController/Read'; // POST to view

         //webpost
        $route['admin/webposts/add'] = 'admin/WebPostsController/Create'; //POST to create
        $route['admin/webposts/edit'] = 'admin/WebPostsController/Update'; // POST to edit
        $route['admin/webposts/del'] = 'admin/WebPostsController/Delete'; // POST to delete
        $route['admin/webposts/read'] = 'admin/WebPostsController/Read'; // POST to view

        //Skills
        $route['admin/skills/add'] = 'admin/SkillsController/Create';
        $route['admin/skills/edit'] = 'admin/SkillsController/Update';
        $route['admin/skills/del'] = 'admin/SkillsController/Delete';
        $route['admin/skills/read'] = 'admin/SkillsController/Read';

        $route['admin/applicants/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1';
        $route['admin/applicants'] = 'admin/ApplicantController/ApplicantInfo';
        $route['admin/applicants/add'] = 'admin/ApplicantController/Create'; //POST to create
        $route['admin/applicants/edit'] = 'admin/ApplicantController/Update'; // POST to edit
        $route['admin/applicants/del'] = 'admin/ApplicantController/Delete'; // POST to delete
        $route['admin/applicants/read'] = 'admin/ApplicantController/Read'; // POST to view
        $route['admin/applicants/(:any)/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1/$2';
        $route['manage/settings/all-web-post'] = 'admin/WebPostsController/AllWebPosts';
        $route['admin/EstablishmentMasterlist/add'] = 'admin/EstablishmentlistController/Create'; //POST to create
        $route['admin/EstablishmentMasterlist/edit'] = 'admin/EstablishmentlistController/Update'; // POST to edit
        $route['admin/EstablishmentMasterlist/del'] = 'admin/EstablishmentlistController/Delete'; // POST to delete
        $route['admin/EstablishmentMasterlist/read'] = 'admin/EstablishmentlistController/Read'; // POST to view


        /* Tags */ $route['manage/settings/tags'] = 'admin/TagsController/Tags';

        $route['admin/tags/add'] = 'admin/TagsController/Create'; //POST to create
        $route['admin/tags/edit'] = 'admin/TagsController/Update'; // POST to edit
        $route['admin/tags/del'] = 'admin/TagsController/Delete'; // POST to delete
        $route['admin/tags/read'] = 'admin/TagsController/Read'; // POST to view

        /* Types */ $route['manage/settings/types'] = 'admin/TypesController/Types';

        $route['admin/types/add'] = 'admin/TypesController/Create'; //POST to create
        $route['admin/types/edit'] = 'admin/TypesController/Update'; // POST to edit
        $route['admin/types/del'] = 'admin/TypesController/Delete'; // POST to delete
        $route['admin/types/read'] = 'admin/TypesController/Read'; // POST to view

        //industries
        $route['admin/industries/add'] = 'admin/IndustriesController/Create'; //POST to create
        $route['admin/industries/edit'] = 'admin/IndustriesController/Update'; // POST to edit
        $route['admin/industries/del'] = 'admin/IndustriesController/Delete'; // POST to delete
        $route['admin/industries/read'] = 'admin/IndustriesController/Read'; // POST to view

        $route['manage/maintenance/countries'] = 'admin/CountriesController/Countries';
        $route['admin/countries/add'] = 'admin/CountriesController/Create'; //POST to create
        $route['admin/countries/edit'] = 'admin/CountriesController/Update'; // POST to edit
        $route['admin/countries/del'] = 'admin/CountriesController/Delete'; // POST to delete
        $route['admin/countries/read'] = 'admin/CountriesController/Read'; // POST to view

