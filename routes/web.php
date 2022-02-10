<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
    return Inertia::render('Home');
})->name('front.home');

// Route::get('/about-us', function () {
//     return Inertia::render('AboutUs');
// })->name('front.about-us');

Route::get('/support-us', function () {
    return Inertia::render('SupportUs');
})->name('front.support-us');

Route::get('/contact-us', function () {
    return Inertia::render('ContactUs');
})->name('front.contact-us');

Route::get('/newsletter', function () {
    return Inertia::render('Newsletter');
})->name('front.newsletter');




// ------------About-us/Route Group----------------------
Route::prefix('/about-us')->group(function () {
    Route::get('/who-we-are', function () {
        return Inertia::render('AboutUs/WhoWeAre');
    })->name('front.about-us.whoweare');

    Route::get('/mission-vision', function () {
        return Inertia::render('AboutUs/MissionVision');
    })->name('front.about-us.missionvision');

    Route::get('/executive-committee', function () {
        return Inertia::render('AboutUs/ExecutiveCommittee');
    })->name('front.about-us.executivecommittee');

    Route::get('/resource-center', function () {
        return Inertia::render('AboutUs/ResourceCenter');
    })->name('front.about-us.resourcecenter');
    // ------------------Books and Publications-------------
    Route::get('/books&publicationList', function () {
        return Inertia::render('AboutUs/BooksAndPublication/BooksAndPublicationList');
    })->name('front.about-us.books&publicationlist');

    Route::get('/books&publicationSingle', function () {
        return Inertia::render('AboutUs/BooksAndPublication/BooksAndPublicationSingle');
    })->name('front.about-us.books&publicationSingle');

    // ---------------ProjectGalleryList------------------
     Route::get('/sports-academy-gallery', function () {
        return Inertia::render('AboutUs/ProjectsGallery/SportsAcademyGallery');
    })->name('front.about-us.sports-academy-gallery');

     Route::get('/ainuddin-library', function () {
        return Inertia::render('AboutUs/ProjectsGallery/AinuddinLibrary');
    })->name('front.about-us.ainuddin-library');

     Route::get('/damuddya-hospital', function () {
        return Inertia::render('AboutUs/ProjectsGallery/DamuddyaHospital');
    })->name('front.about-us.damuddya-hospital');

     Route::get('/pouroshava-moral', function () {
        return Inertia::render('AboutUs/ProjectsGallery/PouroshavaMoral');
    })->name('front.about-us.pouroshava-moral');

     Route::get('/tanima-razzaq-kinder-garden-gallery', function () {
        return Inertia::render('AboutUs/ProjectsGallery/TanimaRazzaqKinderGardenGallery');
    })->name('front.about-us.tanima-razzaq-kinder-garden-gallery');

     Route::get('/amra-ramoni-gallery', function () {
        return Inertia::render('AboutUs/ProjectsGallery/AmraRamoniGallery');
    })->name('front.about-us.amra-ramoni-gallery');

});

<<<<<<< HEAD
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', function () {
=======
// ------------AbdurRazzaq-Biography/Route Group----------------------
Route::get('/biographyinfo', function () {
return Inertia::render('AbdurRazzaq/BiographyInfo');
})->name('front.biographyinfo');

Route::prefix('/abdur-razzaq')->group(function () {

    Route::get('/achivements', function () {
        return Inertia::render('AbdurRazzaq/Achievements');
    })->name('front.abdur-razzaq.achivements');

    Route::get('/biography', function () {
        return Inertia::render('AbdurRazzaq/Biography');
    })->name('front.abdur-razzaq.biography');

    Route::get('/media-archive', function () {
        return Inertia::render('AbdurRazzaq/MediaArchive');
    })->name('front.abdur-razzaq.media-archive');

    Route::get('/timeline', function () {
        return Inertia::render('AbdurRazzaq/Timeline');
    })->name('front.abdur-razzaq.timeline');
});

//----------------Education/Route Group-------------------
Route::get('/education', function () {
    return Inertia::render('OurWork/Education');
})->name('front.our-wrok.education');

    Route::prefix('/education')->group(function () {

        Route::get('/grant', function () {
            return Inertia::render('OurWork/Education/Grant');
        })->name('front.education.grant');

        Route::get('/scholarship', function () {
            return Inertia::render('OurWork/Education/Scholarship');
        })->name('front.education.scholarship');

        Route::get('/research-and-publication', function () {
            return Inertia::render('OurWork/Education/ResearchAndPublication');
        })->name('front.research-and-publication');

        Route::get('/tanima-razzaq-kindergarten', function () {
            return Inertia::render('OurWork/Education/TanimaRazzaqKindergarten');
        })->name('front.tanima-razzaq-kindergarten');

        Route::get('/support-for-infrastructure', function () {
            return Inertia::render('OurWork/Education/SupportInsfrastructure');
        })->name('front.support-for-infrastructure');
    });


//-------------TrainingCareerDevelopment/Route Group------------------
Route::get('/training-career-development', function () {
    return Inertia::render('OurWork/TrainingCareerDevelopment');
})->name('front.our-wrok.training-career-development');

Route::prefix('/training-career-development')->group(function () {

    Route::get('/amra-romoni', function () {
        return Inertia::render('OurWork/TrainingCareerDevelopment/AmraRomoni');
    })->name('front.training-career-development.amra-romoni');

    Route::get('/ict-training-center', function () {
        return Inertia::render('OurWork/TrainingCareerDevelopment/ICTTrainingCenter');
    })->name('front.training-career-development.ict-training-center');

    Route::get('/engineering-training-program', function () {
        return Inertia::render('OurWork/TrainingCareerDevelopment/EngineeringTrainingProgram');
    })->name('front.training-career-development.engineering-training-program');

    Route::get('/job-center', function () {
        return Inertia::render('OurWork/TrainingCareerDevelopment/JobCenter');
    })->name('front.training-career-development.job-center');
});

//------------------SocialActivities Route Group--------------
Route::get('/social-activities', function () {
    return Inertia::render('OurWork/SocialActivities');
})->name('front.our-wrok.social-activities');

Route::prefix('/social-activities')->group(function () {

    Route::get('/library-community-center', function () {
        return Inertia::render('OurWork/SocialActivities/LibraryCommunityCenter');
    })->name('front.social-activities.library-community-center');

    Route::get('/sports-academy', function () {
        return Inertia::render('OurWork/SocialActivities/SportsAcademy');
    })->name('front.social-activities.social-activities/sports-academy');

    Route::get('/projects', function () {
        return Inertia::render('OurWork/SocialActivities/projects');
    })->name('front.social-activities.social-activities/projects');

    Route::get('/volunteerism', function () {
        return Inertia::render('OurWork/SocialActivities/Volunteerism');
    })->name('front.social-activities.social-activities/volunteerism');

    Route::get('/debate-competition', function () {
        return Inertia::render('OurWork/SocialActivities/DebateCompetition');
    })->name('front.social-activities.social-activities/debate-competition');

    Route::get('/relief-program', function () {
        return Inertia::render('OurWork/SocialActivities/ReliefProgram');
    })->name('front.social-activities.social-activities/relief-program');

    Route::get('/social-awareness', function () {
        return Inertia::render('OurWork/SocialActivities/SocialAwareness');
    })->name('front.social-activities.social-awareness');

});

//------------------MedicalHealthcare Route Group-------------------
Route::get('/medical-healthcare', function () {
    return Inertia::render('OurWork/MedicalHealthcare');
})->name('front.our-wrok.medical-healthcare');

Route::prefix('/medical-healthcare')->group( function () {

    Route::get('/healthCamp', function () {
        return Inertia::render('OurWork/MedicalHealthcare/HealthCamp');
    })->name('front.medical-healthcare.healthCamp');

    Route::get('/diabetic-diagnosis-center', function () {
        return Inertia::render('OurWork/MedicalHealthcare/DiabeticDiagnosisCenter');
    })->name('front.medical-healthcare.diabetic-diagnosis-center');

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
>>>>>>> 7a5792b0b44182edba592a6410f01d2a36d3e3f4
    return Inertia::render('Dashboard');
})->name('dashboard');
