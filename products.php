<?php

$navbar = '' ;
include 'init.php';

    $products=[
        'product 1' =>[
            'price' => '620',
            'img'   => 'images/6.jpg',
            'desc'  => 'this is prouduct'
        ],
        'product 2' =>[
            'price' => '6500',
            'img'   => 'images/3.jpg',
            'desc'  => 'this is prouduct'
        ],
        'product 3' =>[
            'price' => '620',
            'img'   => 'images/3.jpg',
            'desc'  => 'this is prouduct'
        ],
        'product 4' =>[
            'price' => '620',
            'img'   => 'images/4.jpg',
            'desc'  => 'this is prouduct'
        ],
        'product 5' =>[
            'price' => '620',
            'img'   => 'images/5.jpg',
            'desc'  => 'this is prouduct'
        ],
        'product 6' =>[   // key
            'price' => '620',              // value
            'img'   => 'images/6.jpg',     // value
            'desc'  => 'this is prouduct'  // value
        ]
    ]
?>
<div class='container'>
    <div class='row m-3'>
<?php 
  foreach ($products as $key => $value) {
?>
<div class='col-sm-6 col-md-4'>

<div class="card mb-5" style="width: 18rem;">
  <img src="<?php echo $value['img'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
      <small class="card-title"> <?php echo $value['price'] ?> LE.</small>
    <h5 class="card-title">  <?php echo $key ?>  </h5>
    <p class="card-text">  <?php echo $value['desc'] ?>  </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  
  </div>
<?php 
  }
?>
</div>
</div>