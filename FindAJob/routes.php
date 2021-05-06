<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/router/router.php';

Route::set('404', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/system/404pageNotFound.php'); 
});

//Guest

Route::set('index.php', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/home.php'); 
});

Route::set('sign-in', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/signin.php'); 
});

Route::set('sign-up', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/signup.php'); 
});

Route::set('contacts', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/contacts.php'); 
});

//Profile User

Route::set('home', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/home.php'); 
});

Route::set('myProfile', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileUser/myProfile.php'); 
});

Route::set('jobs', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileUser/jobs.php'); 
});

Route::set('detailsCandidates', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileUser/detailsCandidates.php'); 
});

Route::set('details', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileUser/details.php'); 
});

Route::set('candidateForm', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileUser/candidateForm.php'); 
});



//Profile Company

Route::set('profile-company', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/myprofile.php'); 
});

Route::set('add-job', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/addJob.php'); 
});

Route::set('view-candidates', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/viewCandidatesCompany.php'); 
});

Route::set('detailsJobs', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/detailsJobs.php'); 
});

Route::set('details-view-candidates', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/detailsViewCandidates.php'); 
});

Route::set('details-candidates-person', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileCompany/detailsCandidatesPerson.php'); 
});

//Profile Admin 

Route::set('add-options', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/admin/addOptions.php'); 
});

Route::set('HRs', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/admin/HRs.php'); 
});

Route::set('add-HR', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/admin/addHR.php'); 
});

//Profile HR

Route::set('candidates', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/candidatesHR.php'); 
});

Route::set('jobs-hr', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/jobsHR.php'); 
});

Route::set('companies', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/companiesHR.php'); 
});

Route::set('detailsHR', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/detailsHR.php'); 
});

Route::set('detailsCandidatesHR', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/detailsCandidatesHR.php'); 
});

Route::set('detailsCompaniesHR', function() {
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/view/front/profileHR/detailsCompaniesHR.php'); 
});

