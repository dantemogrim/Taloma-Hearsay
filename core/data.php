<?php

declare(strict_types=1);

$reporters = [
    0  => [
        'name' => 'Fredrik Hansson',
        'portrait' => '/img/fredrik.png',
    ],
    1  => [
        'name' => 'Helen Asplöv',
        'portrait' => '/img/helen.png',
    ],
    2  => [
        'name' => 'Jenny Bergström',
        'portrait' => '/img/jenny.png',
    ],
    3  => [
        'name' => 'Linus Johansson',
        'portrait' => '/img/linus.png',
    ],
    4  => [
        'name' => 'Stefan Lidell',
        'portrait' => '/img/stefan.png',
    ],
];


$stories = [
    0 => [
        'title' => 'An alarming decrease in number of scapegoats concerns locals.',
        'img' => '/img/fredrik.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[0]['name'],
        'published' => '01-01-2021',
        'shade' => 'This is the shade.',

    ],
    1 => [
        'title' => 'Drug addict survives horse tranquilizer injection.',
        'img' => '/img/helen.png',
        'layout' => 'right',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[1]['name'],
        'published' => '11-11-2020',
        'shade' => 'This is the shade.',

    ],
    2 => [
        'title' => 'This is the title.',
        'img' => '/img/jenny.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[2]['name'],
        'published' => '29-11-2020',
        'shade' => 'This is the shade.',

    ],
    3 => [
        'title' => 'They stopped selling the strawberry flavored ice-cream at the local store.',
        'img' => '/img/linus.png',
        'layout' => 'right',
        'article' => 'Please sign our name petition @ www.the-ice-cream-petition.com',
        'reporter' => $reporters[3]['name'],
        'published' => '03-09-2020',
        'shade' => 'This is the shade.',

    ],
    4 => [
        'title' => 'A local ate lunch <i>alone</i> at the diner the other day.',
        'img' => '/img/stefan.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[4]['name'],
        'published' => '13-12-2020',
        'shade' => 'This is the shade.',

    ],
    5 => [
        'title' => '10 Hot Tips on Fitting in Better!',
        'img' => '/img/fredrik.png',
        'layout' => 'right',
        'article' => '1.<br>2.<br>3.<br>4.<br>5<br>6.<br>7.<br>8.<br>9.<br>10.',
        'reporter' => $reporters[0]['name'],
        'published' => '09-12-2020',
        'shade' => 'This is the shade.',

    ],
    6 => [
        'title' => 'This is the title.',
        'img' => '/img/helen.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[1]['name'],
        'published' => '22-05-2020',
        'shade' => 'This is the shade.',

    ],
    7 => [
        'title' => 'My neighbor had plastic surgery but I haven’t been getting any e-mails from the public about it.',
        'img' => '/img/jenny.png',
        'layout' => 'right',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[2]['name'],
        'published' => '27-01-2021',
        'shade' => 'This is the shade.',

    ],
    8 => [
        'title' => 'This is the title.',
        'img' => '/img/linus.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[3]['name'],
        'published' => '31-01-2021',
        'shade' => 'This is the shade.',

    ],
    9 => [
        'title' => 'This is the title.',
        'img' => '/img/stefan.png',
        'layout' => 'right',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[4]['name'],
        'published' => '17-02-2021',
        'shade' => 'This is the shade.',

    ],
    10 => [
        'title' => 'This is the title.',
        'img' => '/img/fredrik.png',
        'layout' => 'left',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[0]['name'],
        'published' => '14-01-2021',
        'shade' => 'This is the shade.',

    ],
    11 => [
        'title' => 'This is the title.',
        'img' => '/img/helen.png',
        'layout' => 'right',
        'article' => 'We have always been proud of our rich scapegoat supply in this town. 
        There has never been any issues before but now times have changed. We are now seeing a growing 
        number of scapegoats that have been leaving our wonderful city lately. When asked, many scapegoats 
        have replied with statements such as: \'Why won’t you people leave me alone?\’,
         \‘My life doesn\’t concern you.\’ and \‘I don’t even know you. Please, get out of my house.\’ We can\’t 
         exactly know the meaning of these responses but regardless we’re convinced that the ones to blame
          are most definately the scapegoats themselves. If you find yourself standing next to a scapegoat
           in dire need of a new purpose - feel free to call our hotline at 0141-MY-LITTLE-SCAPEGOAT. Thank you.',
        'reporter' => $reporters[1]['name'],
        'published' => '22-01-2021',
        'shade' => 'This is the shade.',

    ],
];
