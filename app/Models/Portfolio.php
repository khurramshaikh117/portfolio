<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Portfolio extends Model
{
    public $portfolioUserName = 'Khurram Shaikh';
    public $portfolioOneliner = '- Tech enthusiast at heart.';
    public $portfolioUserEmail = 'khurramshaikh117@gmail.com';
    public $portFolioGreeting = 'Welcome!';
    public $introductoryLineOne 
    = "I'm a Professional <span>Software</span> & <span>Web</span> Developer.";
    public $welcomeMessage = "I cordially invite you to immerse yourself in my website, where you can navigate through the intricacies of my professional journey as a dedicated software developer.";
    public $aboutMeLine1   = "Hello! I am Khurram Shaikh, a passionate <span>Lead Software Developer</span>";
    public $aboutMeLine2  = "My journey began with a deep fascination for technology, leading me to acquire a diverse skill set in various programming languages and frameworks, including PHP , MySQL, and JavaScript & its respective frameworks. As a lead developer, I thrive on collaboration, mentoring teams, and delivering projects that not only meet but exceed client expectations.";
    public $fblink = 'https://www.facebook.com/profile.php?id=100011823842516&sk=about';
    public $twlink = 'https://x.com/Khurram080894';
    public $instalink = 'https://www.instagram.com/ikhurramshaikh/';
    public $linkedinlink = 'https://www.linkedin.com/in/khurram-shaikh-781886175/';
    public $techIntro = 'Throughout my career, I’ve had the privilege of working with a diverse tech stack, continually expanding my skill set to stay at the forefront of innovation. I am passionate about keeping up-to-date with the latest advancements in the industry, and adapting to new technologies has always been an exciting journey rather than a challenge. My commitment to learning and versatility allows me to seamlessly incorporate emerging tools and frameworks, ensuring I bring the best solutions to every project.';
        public $techArray = [
            [ 'name'=>'PHP',
              'logo'=>'assets/img/php.png',
              'text'=>'PHP was my first love in programming, and my expertise is grounded in backend development with frameworks like Laravel and CodeIgniter. I’ve also worked with CMSs such as Joomla and WordPress, adding versatility to my PHP skill set. Creating RESTful APIs and integrating third-party APIs to enable seamless data flow has been a key focus in my work'
            ],
            [
              'name'=>'JavaScript',
              'logo'=>'assets/img/js.png',
              'text'=>'I have always been fortunate to integrate JavaScript into my projects for front-end development. Harnessing its trending frameworks, such as jQuery, to create dynamic applications has consistently been my passion and driving motivation.I remain committed to staying abreast of the latest advancements, continually seeking opportunities to elevate my skills'
            ],
            [
              'name'=>'HTML',
              'logo'=>'assets/img/html.png',
              'text'=>'HTML has been the cornerstone of my web development journey, providing the essential structure for my projects. With a strong foundation in semantic markup, I strive to create clean and accessible web pages that enhance user experience. I am committed to evolving my skills by exploring new HTML5 features and incorporating them into my work.'
            ],
            [
              'name'=>'CSS',
              'logo'=>'assets/img/css.png',
              'text'=>"CSS is the art of transforming my web projects into visually stunning experiences. Although I have less experience as a designer, I leverage the power of the Bootstrap framework to create responsive layouts that adapt seamlessly across various devices. My expertise in styling techniques, combined with Bootstrap's utility classes, allows me to craft intuitive interfaces that engage users effectively."
            ],
            [
              'name'=>'MYSQL',
              'logo'=>'assets/img/mysql.png',
              'text'=>"MySQL has been integral to my journey in backend development, providing a robust and reliable database management system for my applications. I have hands-on experience in creating database architecture, allowing me to efficiently store and retrieve data. My familiarity with writing complex SQL queries enables me to optimize data flow and enhance application performance thereby contributing to the application scalibiltiy."
            ],
            [
              'name'=>'Cordova',
              'logo'=>'assets/img/cordova.png',
              'text'=>"I have utilized Apache Cordova for mobile application development, enabling me to create hybrid mobile applications using familiar web technologies such as HTML, CSS, and JavaScript. Cordova's extensive library of plugins has allowed me to seamlessly access native device features, enhancing the overall user experience. My experience with Cordova empowers me to build cross-platform solutions that cater to a diverse range of audiences."
            ]
        ];
        public $phpText = "PHP was my first love in programming, and my expertise is grounded in backend development with frameworks like Laravel and CodeIgniter. I’ve also worked with CMSs such as Joomla and WordPress, adding versatility to my PHP skill set. Creating RESTful APIs and integrating third-party APIs to enable seamless data flow has been a key focus in my work";
        public $education = [
            [
               'duration'=>'2000-2010',
               'degree'=>
               'Secondary School Certificate (SSC)',
               'university'=>'Maharashtra Board of Education, India, Mumbai',
               'description'=>'I completed my foundational schooling under the Maharashtra State Board, achieving my Secondary School Certificate (SSC) from Our Lady of Good Counsel High School. This early educational experience provided a solid grounding in academics and instilled core values that have guided me in both personal and professional pursuits.'
            ],
            [
               'duration'=>'2010-2012',
               'degree'=>
               'Higher Secondary Certificate (HSC)',
               'university'=>'Maharashtra Board of Education, India, Mumbai',
               'description'=>'I pursued my Higher Secondary Certificate (HSC) under the Maharashtra State Board at Rizvi College of Arts, Science, and Commerce in Bandra, Mumbai. This academic experience strengthened my foundational knowledge and prepared me well for the next stages of my career, which was Engineering in the field of computer science'
            ],
            [
               'duration'=>'2012-2016',
               'degree'=>
               'Bachelor Of Engineering in Computer Science',
               'university'=>'Mumbai University,India',
               'description'=>'I completed my Bachelor of Engineering in Computer Science from Dilkap Research Institute of Engineering, affiliated with Mumbai University. This program provided me with a robust foundation in software engineering principles, programming, and system design, equipping me with the necessary skills to excel in the ever-evolving technology landscape.'
            ],
        ];
        public $expArray = [
            [
              'duration'=>'Sep 2016 - March 2020',
              'designation' => 'PHP Developer',
              'organization' => 'Convergence IT Services',
              'role_description' => 'At Convergence IT Service, I worked as a PHP Developer on significant projects, including banking and insurance applications, along with HRMS and CRMS systems, using PHP, JavaScript, MySQL, jQuery, ElectronJS, Cordova, and Joomla. Many of these systems were high-impact, requiring structured workflows and supervisor approvals, which taught me to prioritize data integrity and compliance with organizational processes. This experience helped me understand the critical importance of secure and efficient approvals in large-scale applications, further developing my technical and professional acumen.'
            ],
            [
              'duration'=>'March 2020 - July 2022',
              'designation' => 'Senior PHP Developer',
              'organization' => 'Samco Securities',
              'role_description' => 'At Samco Securities, a stock market-driven company, my role as a Senior PHP Developer involved building and optimizing various essential systems that supported their core business. I was responsible for enhancing the onboarding systems, implementing complex API integrations, and developing CRMs, HRMS, and data management systems. Additionally, I worked on their landing websites, ensuring they met performance, security, and usability standards. This role sharpened my ability to create scalable and secure applications in a high-stakes financial environment, adapting to the dynamic needs of the stock market industry.'
            ],
            [
              'duration'=>'July 2022- Present',
              'designation' => 'Technical Lead',
              'organization' => 'LearningMate Solutions',
              'role_description' => 'In my current role as a Technical Lead at LearningMate Solutions, an EdTech firm, I am entrusted with leading a diverse team comprising developers, a DevOps engineer, a designer, and a tester. My responsibilities extend to managing the entire deployment process, which I execute through a CI/CD pipeline, utilizing tools like Jenkins to ensure smooth and efficient rollouts. I actively conduct code reviews, offer mentorship to team members, and contribute to building technical skills within the team. My role also involves creating essential documentation, including low-level design documents, and development whenever necessary'
            ]
        ];

    // Method to calculate years of experience
    public function calculateExp()
    {
        $startDate = Carbon::createFromFormat('Y-m-d', '2016-09-01'); // Starting date of your career
        $currentDate = Carbon::now(); // Current date

        return (int) $startDate->diffInYears($currentDate); // Calculate the difference in years
    }

}
