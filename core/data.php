<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$reporters = [
  [
    'id' => 0,
    'name' => 'Fredrik Hansson',
    'portrait' => '/img/fredrik.png',
  ],
  [
    'id' => 1,
    'name' => 'Helen Asplöv',
    'portrait' => '/img/helen.png',
  ],
  [
    'id' => 2,
    'name' => 'Jenny Bergström',
    'portrait' => '/img/jenny.png',
  ],
  [
    'id' => 3,
    'name' => 'Linus Johansson',
    'portrait' => '/img/linus.png',
  ],
  [
    'id' => 4,
    'name' => 'Stefan Lidell',
    'portrait' => '/img/stefan.png',
  ],
];


$stories = [
  [
    'id' => 0,
    'title' => "An alarming decrease in number of scapegoats concerns locals.",
    'img' => '/img/fredrik.png',
    'layout' => 'left',
    'article' => "We have always been proud of our rich scapegoat supply in this town.
        There has never been any issues before but now times have changed. We are now seeing a growing
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats
        have replied with statements such as: \"Why won’t you people leave me alone?\",
         \"My life doesn’t concern you.\" and \"I don’t even know you. Please, get out of my house.\" We can’t
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.",
    'reporter' => $reporters[0]['name'],
    'published' => '01-01-2021',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 1,
    'title' => "Drug addict survives horse tranquilizer injection.",
    'img' => '/img/helen.png',
    'layout' => 'right',
    'article' => "The local veterinary ambulance reported to the police this Sunday that a local drug addict
    broke into one of their vehicles. The 52 year old man stole and injected a horse tranquilizer and was found
    in poor condition only minutes after the injection. The burglar was lucky enough to get in a
    ambulance (meant for humans) in time to get emergency care at the local hospital.
    He is said to be sentenced to jail but you will most likely find him poking around the square
    as usual in a week or two.",
    'reporter' => $reporters[1]['name'],
    'published' => '11-11-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 2,
    'title' => "An Intriguing Article Heading Placeholder.",
    'img' => '/img/jenny.png',
    'layout' => 'left',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[2]['name'],
    'published' => '29-11-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 3,
    'title' => "They stopped selling the strawberry flavored ice-cream at the local store.",
    'img' => '/img/linus.png',
    'layout' => 'right',
    'article' => "Who would do such a monstrous act as to take away the best ice cream the city has to offer?
    Ive been telling the staff for weeks that they need to get an order going. The only answer Ive gotten so far
    is that the brand has gone bankrupt but I believe there is more to this story. I think they are lying.
    I am highly suspicious that the staff themselves are hoarding all the ice cream in their warehouse and eating
    all of it and laughing while making a fool out of me. Well I got news for them.
    My ice cream intake has been going down so dramatically that my parents are now discussing ways to get me to
     move the heck away from them because they simply cant stand how I get when I cant have my strawberry ice cream from
     Gotti Gott every night at 6pm. Do you want to help out and make sure that a boy like me still has
     his ice cream rights in order and a roof over his head?
    Please sign my name petition @ www.the-ice-cream-petition.com",
    'reporter' => $reporters[3]['name'],
    'published' => '03-09-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 4,
    'title' => "A local ate lunch <i>alone</i> at the diner the other day.",
    'img' => '/img/stefan.png',
    'layout' => 'left',
    'article' => "Modern day lunch culture has gone too far. Recently me and my good friend Orvar Jönsson were
    having our regular Thursday lunch att Pekka's. Minutes went by and suddenly a new face comes through the doors.
    I'd never seen this person before, so it had to be either a newcomer or a tourist. Beside the point.
    The strangest thing happened. They took one of the center tables to dine - alone!
    It was a hideous sight! I panicked. Like an accident, I wanted to look away but I couldn't.
    I felt sick to my gut. I looked at my friend who's jaw dropped to the floor. The room started spinning.
    Why was this person making the conscious decision to embarrass themselves by feasting without company?
    Others might do whatever they please behind closed doors, but in front of others? It
    is simply unheard of. Eating out is an immediate social expression to tell others how socially wealthy
    and not lonely you are. Ever since I haven't been able to go back to Pekka's. I might risk being pointed out as
    lonely by association of the event that day. I have a reputation to think about. What a shame.",
    'reporter' => $reporters[4]['name'],
    'published' => '13-12-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 5,
    'title' => "10 Hot Tips on Fitting in Better!",
    'img' => '/img/fredrik.png',
    'layout' => 'right',
    'article' => "<b>1.</b> Dont try to shape yourself into being a better person. Shape others!<br><b>2. </b>Make others feel bad so that you can feel better about yourself.<br>
    <b>3.</b> If someone says something awful - be agreeable! Or silent.<br><b>4.</b>Color is meant for nature - not for clothes! Find that wardrobe inspiration by looking at communal buildings or your neighbor.
    <br><b>5.</b> Take active part of local sporting events (regardless of your personal interests). Its a great way to pry on others.<br><b>6.</b>Make sure your kids make friends with the correct children in their class, to secure your social status.<br>
    <b>7.</b> Be vocally critical about public service but avoid paying tax money for it.<br>
    <b>8.</b> Watch the EuroVision Song Contest and all tv shows that air around 8pm Monday through Friday.
    That way you will have the perfect ice breaker when bonding with the other locals.<br>
    <b>9.</b>Work on your evil eye, so you can judge people with your perfected look.<br>
    <b>10.</b> Make impolite conversation by merely staring at others without actually speaking with words.",
    'reporter' => $reporters[0]['name'],
    'published' => '09-12-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 6,
    'title' => "Lars won 10 000 on Keno - \"I can't believe it wasn't me.\" says disappointed neighbor.",
    'img' => '/img/helen.png',
    'layout' => 'left',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[1]['name'],
    'published' => '22-05-2020',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 7,
    'title' => "My neighbor had plastic surgery but I haven’t been getting any e-mails from the public about it.",
    'img' => '/img/jenny.png',
    'layout' => 'right',
    'article' => "I had the utmost trust that the people in this town would come to me
    if there were any signs of gossip surrounding anybody I know. I am now deeply concerned
    that my worst fears may have been acknowledged. Last night I saw Mr. Jonasson out for a regular walk
    with his poodle Nisse. Little did I know, Nisse suddenly had a new nose.. I couldnt believe it.
    I reported it to my neighborhood group online and it turns out that nobody had cared to contact me about it.
    Now my question is - what is this town coming to? Are we not supportive enough in our culture to inform
    each other about every little thing - especially when they might not even be true?",
    'reporter' => $reporters[2]['name'],
    'published' => '27-01-2021',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 8,
    'title' => "The new cashier is not giving me special treatment - what to do?",
    'img' => '/img/linus.png',
    'layout' => 'left',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[3]['name'],
    'published' => '31-01-2021',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 9,
    'title' => "The King is coming to swear in our towns new bridge!",
    'img' => '/img/stefan.png',
    'layout' => 'right',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[4]['name'],
    'published' => '17-02-2021',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 10,
    'title' => "Woman from nowhere-ville sews phone company - there is supposed to be a
    reception somewhere but i dont see it.",
    'img' => '/img/fredrik.png',
    'layout' => 'left',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[0]['name'],
    'published' => '14-01-2021',
    'shade' => mt_rand(10, 45),

  ],
  [
    'id' => 11,
    'title' => "Snails sew cabbage farmer: not even remotely close to michelin quality.",
    'img' => '/img/helen.png',
    'layout' => 'right',
    'article' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue ut. Amet nisl purus in mollis nunc.
    Mollis aliquam ut porttitor leo a diam sollicitudin tempor. Dictumst quisque sagittis purus sit.
    Massa id neque aliquam vestibulum morbi blandit cursus. Integer feugiat scelerisque varius morbi.
    Adipiscing elit duis tristique sollicitudin nibh sit amet. Et molestie ac feugiat sed.
    Vestibulum lorem sed risus ultricies tristique nulla aliquet enim. Nulla aliquet porttitor lacus luctus
    accumsan tortor. Auctor augue mauris augue neque gravida in fermentum et. Lorem donec massa sapien faucibus
    et molestie ac. Quisque id diam vel quam elementum pulvinar etiam non quam. Imperdiet massa tincidunt nunc
    pulvinar sapien et ligula ullamcorper malesuada. Et egestas quis ipsum suspendisse ultrices.
    Euismod in pellentesque massa placerat duis. Ultricies tristique nulla aliquet enim.
    Fusce ut placerat orci nulla pellentesque dignissim enim sit.",
    'reporter' => $reporters[1]['name'],
    'published' => '22-01-2021',
    'shade' => mt_rand(10, 45),

  ],
];
