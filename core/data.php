<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

  ],
  3 => [
    'title' => 'They stopped selling the strawberry flavored ice-cream at the local store.',
    'img' => '/img/linus.png',
    'layout' => 'right',
    'article' => 'Please sign our name petition @ www.the-ice-cream-petition.com',
    'reporter' => $reporters[3]['name'],
    'published' => '03-09-2020',
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

  ],
  5 => [
    'title' => '10 Hot Tips on Fitting in Better!',
    'img' => '/img/fredrik.png',
    'layout' => 'right',
    'article' => '<b>1.</b> Dont try to shape yourself into being a better person. Shape others!<br><b>2. </b>Make others feel bad so that you can feel better about yourself.<br>
    <b>3.</b> If someone says something awful - be agreeable! Or silent.<br><b>4.</b>Color is meant for nature - not for clothes! Find that wardrobe inspiration by looking at communal buildings or your neighbor.
    <br><b>5.</b> Take active part of local sporting events.<br><b>6.</b>Make sure your kids make friends with the correct children in their class, to secure your social status.<br>
    <b>7.</b> Be vocally critical about public service but avoid paying tax money for it.<br>
    <b>8.</b> Watch the EuroVision Song Contest and all tv shows that air around 8pm Monday through Friday.
    That way you will have the perfect ice breaker when bonding with the other locals.<br>
    <b>9.</b><br>
    <b>10.</b>',
    'reporter' => $reporters[0]['name'],
    'published' => '09-12-2020',
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

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
    'shade' => mt_rand(10, 45),

  ],
];
