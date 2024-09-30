<?php

namespace App\Livewire;

use Livewire\Component;

class AboutMe extends Component
{
    public $events = [
        [
            'title' => 'High School',
            'date' => 'September 2016',
            'content' => "\nDuring this time, I chose Computer Science as an advanced subject in high school. Our teacher was a traditionalist and selected Pascal as the first programming language for beginners. Once we had mastered the basics, our teacher introduced us to C++. Back then, almost everyone complained about using such outdated and 'obsolete' technologies, but now I truly appreciate those lessons. Those languages were unforgiving of mistakes and helped me build a solid foundation.",
            'icon' => 'school.png',
        ],
        [
            'title' => 'Studies',
            'date' => 'October 2018',
            'content' => "Unfortunately, I didn’t manage to get into Applied Computer Science at the AGH University of Science and Technology. As a result, I chose to study languages instead - knowing a foreign language is always useful. However, I was already proficient in English and felt it would be a waste of time. That’s why I decided to pursue Russian philology, as it was a very popular language at the time.",
            'icon' => 'studies.png',
        ],
        [
            'title' => 'Graduating',
            'date' => 'July 2021',
            'content' => "I successfully defended my bachelor's thesis in the field of English and Russian for Business. At that point, I decided I needed a break from education, so I spent the following year working in a restaurant, where I gained valuable experience in interpersonal communication and customer service.",
            'icon' => 'graduate.png',
        ],
        [
            'title' => 'One year later...',
            'date' => 'October 2022',
            'content' => "During this time, I realized that I was, in a way, wasting my time and not progressing. As a result, I returned to my studies. I was highly motivated and began studying two fields simultaneously: a Master's in Russian Language for Specialized Translation at Jagiellonian University in Kraków, and a Bachelor's in Computer Science at the University of Information Technology and Management in Rzeszów. I don’t like leaving things unfinished, so I continued with Russian studies. At the time, I thought it was the right choice, but over time, I realized that Computer Science, particularly programming, was my true passion.",
            'icon' => 'working_restaurant.png',
        ],
        [
            'title' => 'During studies - 1st internship',
            'date' => 'June 2023',
            'content' => "My first internship was at Simplicity Games, a game development studio. I had no prior experience with C# or Unity, so it was a plunge into the deep end for me. With the help of tutorials on YouTube, StackOverflow, and Udemy, after a month and a half of the internship, I managed to create a mobile game called Zgadnij Suchara. That was the moment I realized that programming was my future.",
            'icon' => 'laptop.png',
        ],        [
            'title' => "End of master's in Russian",
            'date' => 'June 2024',
            'content' => "At that point, I completed my courses at Jagiellonian University and was able to fully focus on programming. During this time, I developed two small projects for my studies  -  a mobile app/organizer to track attendance at classes and other events, and simple Snake game written in Java.",
            'icon' => 'studies.png',
        ],
        [
            'title' => 'During studies - 2nd internship',
            'date' => 'July 2024',
            'content' => "My second internship was at Danmar Computers (3 months). I worked with completely different technologies than those I had encountered before or during my studies. I mainly used PHP (Laravel projects) and Flutter, but Python also came in handy (for parsers, etc.). This time, it wasn't as challenging as my first internship in game development - I had a solid foundation and the confidence that I could understand and learn any language or technology. I believe that programming is fundamentally the same, and different languages or frameworks are quite similar to each other. What really matters is understanding how computers 'think' in order to program effectively. This was probably the most formative period of my life - I participated in the development of various web platforms and mobile apps, and I also managed to create my own projects, from scratch to production release.",
            'icon' => 'php.png',
        ],        [
            'title' => 'Now',
            'date' => 'October 2024',
            'content' => "I am now returning to part-time studies and looking for a job that will allow me to grow, regardless of the specific technologies used - as long as it's in the programming field. In the meantime, I'm working on my own projects. I wrote a Discord bot in Python - a simple program that checks API endpoints at regular intervals and sends a message to a channel when changes or new information are detected. Additionally, I created a simple website that calculates the materials needed to craft items in a game, accounting for iterative resource returns. This, in turn, helped me gain a better understanding of Livewire.",
            'icon' => 'question.png',
        ],

    ];

    public function render()
    {
        return view('livewire.about-me');
    }
}
