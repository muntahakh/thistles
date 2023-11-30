<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->delete();
        $questions = array(
            array('heading_id' => 1 ,'guidance_notes' => 'The purpose of this part is to provide the NDIA with a brief overview of your life todate, and how your life has been impacted by disability.  There is no need to provide a detailed
            medical description of your disability.  The NDIA is more interested in how that disability affects your
            life in the areas of mobility, communication, social interaction, self-management, learning, and self-
            care.  Remember to describe yourself on a bad day, rather than when they are at your best.',
            'questions' => 'What disabilities or other lifelong conditions have you been diagnosed with? In a few sentences, briefly summarise your life and condition so far.',
            'instructions' => 'I am 18 years old and have severe autism and an intellectual disability.  I am non-verbal and have
            significant issues with self-regulation, self-harm, and repetitive behaviours which affect all areas of
            my life.  I am unable to care for myself without significant support.</br> </br>
            I am 17 years old and have quadriplegic cerebral palsy.  I am unable to walk or feed myself, and
            need assistance with all aspects of my daily life including personal care.',
            'input_type' => 'text', 'sequence' => 1, 'number' => 1),

            array('heading_id' => 1 ,'guidance_notes' => '',
            'questions' => 'How has disability impacted your life?  Please try briefly to address all areas of your life,
            such school, home and social life.  Please focus on the struggles and challenges that you face.',
            'instructions' => 'Disability significantly impacts all areas of my life.  I have no speech, so find communication a
            struggle which can cause frustration and anxiety.  I have no prospects of ever finding paid
            employment.  I am unable to attend to my morning or evening self-care needs without support.  I am
            incontinent.  At school, I focus on trying to learn practical living skills such as cooking and self-care.  I
            have no friends, and do not enjoy socialising with others.  I am heavily medicated, which has affected
            my weight and general health.</br></br>
            I experience significant and permanent disability with extreme functional impairment and complex,
            high and enduring physical support needs. I require access to 24-hour support for basic daily
            activities, including toileting, mobility (e.g. transfers from bed to chair via ceiling track hoist) and
            food preparation and consumption. I use a motorised wheelchair (self-drive) or manual wheelchair
            (attendant propelled) with significant trunk support and customised seating for all home-based and
            community mobility. I require the assistance of two people for ceiling hoist transfers. I can verbalise
            some single words and letters (e.g. ‘yes/no’); however, I have no other verbal communication. I
            communicate primarily by typing into or using speech output on a Samsung Galaxy tablet, used as an
            augmentative communication device. I have severe difficulty in joining in community activities.',
            'input_type' => 'text', 'sequence' => 2, 'number' => 2),

            array('heading_id' => 1 ,'guidance_notes' => '',
            'questions' => 'What supports and interventions have been provided for you to this point in your life?',
            'instructions' => 'I received ABA therapy in my early years.  Since then, I have worked with a speech therapist and
            occupational therapist at school.  For communication, I have an ipad with Proloquo2go.</br></br>
            At school, I was accompanied by a teaching assistant throughout the day who helped me with all my
            physical requirements such as writing, typing, eating and transferring from their wheelchair to the
            toilet.  I have worked with a physiotherapist for seven years.  I use a hoist to transfer from my bed to
            my wheelchair or commode.  I also use an occupational therapist.',
            'input_type' => 'text', 'sequence' => 3, 'number' => 3),

            array('heading_id' => 1 ,'guidance_notes' => '',
            'questions' => 'What supports and interventions have been provided for you to this point in your life?',
            'instructions' => '',
            'input_type' => 'text', 'sequence' => 4, 'number' => 4),

            array('heading_id' => 1 ,'guidance_notes' => '',
            'questions' => 'When do / did you finish school?',
            'instructions' => '',
            'input_type' => 'text', 'sequence' => 5, 'number' => 5),

            array('heading_id' => 2 ,'guidance_notes' => 'The NDIS needs to hear about any challenges that you have with mobility.  When
            considering mobility, your answers below should address not only physical issues which may limit
            your functional movement, but also any behavioural issues, intellectual disabilities or the like which
            may make (say) travelling by car or public transport difficult.
            <br>
            Please note that home modifications and vehicle modifications / driver supports are addressed in a
            separate section of this questionnaire.
            <br>
            If you have no issues with mobility, you can skip to the next section <a href="/skipSection">here</a>',
            'questions' => 'What are your goals for relating to mobility?  <i>Note:  Your goals are a crucial part of your
            NDIS Reassessment.  Make sure you properly describe your goals related to mobility.  NDIS will not
            provide funding unless your requirements are sufficiently linked to those goals.  Also make sure that
            you indicate the time frame within which you wish to achieve each goal.</i>',
            'instructions' => 'I would like to maximize my independence by being able to independently transfer in and out of my
            wheelchair within months.
            </br></br>
            To be able to independently access public transport using my wheelchair within 3 months.
             </br></br>
            Within the next year, to be able to travel safely in a car without having an anxiety attack, trying to
            exit the car when it is moving, or interfering with the driver.',
            'input_type' => 'text', 'sequence' => 1, 'number' => 6),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'Do you have limited movement?  For example, do you experience difficulties in basic
            physical activities such as walking, standing, or climbing stairs due to conditions like cerebral palsy or
            muscular dystrophy?  Please provide as much detail as possible.',
            'instructions' => 'Moving from my chair to another location.  My cerebral palsy affects my muscle tone and control,
            causing a combination of stiffness (spasticity), involuntary movement (dystonia), and decreased
            muscle strength.
            </br></br>
            My cerebral palsy presents substantial difficulties in basic physical activities. My impaired muscle
            coordination and control make walking particularly challenging. I primarily use crutches for support,
            but my mobility remains limited due to my condition. Tasks like standing and climbing stairs are
            significantly challenging and often require substantial assistance.',
            'input_type' => 'text', 'sequence' => 2, 'number' => 7),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'Do you have balance issues, leading to a higher risk of falls and associated injuries?
            Please provide full details.',
            'instructions' => 'My muscle tone and control are affected by my disability, which can make it difficult for me to
            maintain an upright position, even when seated.   I rely on my wheelchair for mobility and need
            adaptive equipment for stability and support. The risk of falls is a constant concern, so we\'ve made
            modifications at home, like installing grab bars and using a hospital bed, to minimize the risk.
            </br>  </br>
            It\'s particularly difficult for me to balance when I am transferring from my wheelchair to another
            place, like a bed or a car. Because of this, I am at a higher risk of falling during these transitions.  I am
            working with therapists to develop safe practices around such transitions.',
            'input_type' => 'text', 'sequence' => 3, 'number' => 8),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'If you rely on wheelchairs or other mobility aids for movement and face challenges
            navigating different environments, particularly those that are not wheelchair-accessible, please
            provide full details.',
            'instructions' => 'One of the biggest challenges that I face is when locations aren\'t wheelchair accessible.  My
            independence can be significantly limited by the environment, like when I encounter buildings
            without ramps or elevators, narrow doorways, and inaccessible bathrooms. These instances can be
            frustrating and make my everyday life more challengin.
             </br> </br>
            Accessibility can be a big issue for me. For example, when I am trying to get into a building that only
            has steps, I can’t get in without assistance. And in social situations, like when friends are planning to
            go somewhere, I always must ask if it\'s wheelchair accessible. That adds an extra layer of planning
            and sometimes disappointment when I realise that I can\'t join in. ',
            'input_type' => 'text', 'sequence' => 4, 'number' => 9),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'If you have difficulties using public transportation or travelling in a private car please
            provide full details of how this limits your ability to access services, maintain social connections, or
            engage in employment or educational opportunities. ',
            'instructions' => 'Public transportation and travelling in a private car both present their own sets of challenges for
            me. Buses and trains aren\'t always equipped with ramps or designated wheelchair spaces, and
            sometimes other passengers aren\'t considerate of the space I need. In a private car, it\'s a struggle to
            get my wheelchair in and out of the car, and I am reliant on someone else to drive. These difficulties
            limit my access to services like shopping, medical appointments, and social events. They also affect
            my educational opportunities because it becomes harder for me to commute to school.
            </br> </br>
            Public transportation is especially tough because it\'s often crowded, noisy, and unpredictable, all of
            which can cause me significant distress. Private cars are somewhat better, but the process of getting
            in and out, buckling the seatbelt, and the motion of the vehicle can be challenging too.  If I am
            anxious I may shout loud noises which distract the driver, or sometimes I may try and jump out of
            the car whilst it is moving.  This generally means that I need two on one support when travelling in a
            car. These difficulties can limit my ability to access services like therapy sessions, maintain social
            connections, or participate in educational opportunities.',
            'input_type' => 'text', 'sequence' => 5, 'number' => 10),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'Do you require any assistive technology for mobility?  [Please note that vehicle
            modifications and home modifications are addressed later in a separate part of this questionnaire]  ',
            'instructions' => '',
            'input_type' => 'checkbox', 'sequence' => 6, 'number' => 11),

            array('heading_id' => 2 ,'guidance_notes' => 'Guidance note:  If you want to learn more about how the NDIS funds assistive technology, click <a href="https://ourguidelines.ndis.gov.au/supports-you-can-access-menu/equipment-and-technology/assistive-technology">here</a>
            to read their Operational Guidelines.',
            'questions' => 'What assistive technology for mobility do you require, why, and how much will it cost? ',
            'instructions' => 'I am unable to transfer independently from my wheelchair to other seating, to commode or bed
            and require a hoist for most of my transfers . A ceiling hoist is requires to ensure safe transferring to
            reduce risks of injury and falls.  C-Series C450 Manual Traverse Ceiling Hoist with track -installed
            cost  $[insert]',
            'input_type' => 'cost', 'sequence' => 7, 'number' => 12),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'Is this a new item for you, or are you looking to fund a replacement?',
            'instructions' => '',
            'input_type' => 'radio', 'sequence' => 8, 'number' => 13),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'What is the reason this item needs to be replaced? ',
            'instructions' => '',
            'input_type' => 'skipable', 'sequence' => 9, 'number' => 14),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'As this assistive technology falls within the “mid cost” category, you will need to supply
            NDIS with written evidence (such as a letter or report) from an assistive technology adviser
            confirming that you need the technology and the reasons for this.  That evidence must tell NDIS:<br>
            • the assistive technology you need<br>
            • why it is the best value <br>
            • how it will help with your needs and goals <br>
            • an estimate of how much the assistive technology costs.   <br>

            Please confirm the name of your expert and the date of their letter or report.',
            'instructions' => '',
            'input_type' => 'skipable', 'sequence' => 10, 'number' => 15),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'As this assistive technology falls within the “high cost” category, you will need to supply
            NDIS with written evidence (such as a letter or report) from a qualified assistive technology assessor
            such as an allied health practitioners, orientation and mobility specialist, or professional
            rehabilitation engineers confirming that you need the technology and the reasons for this.  That
            evidence must tell NDIS:  <br>
            • the assistive technology you need <br>
            • why it is the best value <br>
            • how it will help with your needs and goals <br>
            • an estimate of how much the assistive technology costs.   <br>

            Please confirm the name of your expert and the date of their letter or report.',
            'instructions' => '',
            'input_type' => 'text', 'sequence' => 11, 'number' => 16),

            array('heading_id' => 2 ,'guidance_notes' => '',
            'questions' => 'As this assistive technology falls within the “high cost” category, you will also need to
            supply NDIS with a quote.  Please confirm details of your quote (supplier / date / amount): ',
            'instructions' => '',
            'input_type' => 'text', 'sequence' => 12, 'number' => 17),

        );
        DB::table('questions')->insert($questions);
    }
}
