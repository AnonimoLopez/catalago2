
<?php 

$menu = "";
                    
$img = array("ROPA INVIERNO","ROPA INVIERNO","ROPA INVIERNO","ROPA INVIERNO","ROPA INVIERNO","ROPA INVIERNO", "ROPA");
for ($i=0; $i <6 ; $i++) { 
    $menu.= " <li data-target='#carousel-example-generic' data-slide-to='".$i."' class=''></li>";

}
$menu.= " <li data-target='#carousel-example-generic' data-slide-to='7' class='active'></li>
                    </ol>";

$visual = array("","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500","TODO ESTE CONJUNTO POR TAN SOLO $500");

for ($i=0; $i < visual.length-1 ; $i++) { 
    $visual.= "<a>".$visual[$i]."<a>";
}


$img_visual = "";

/*for ($i=1; $i <7 ; $i++) { 
     $img_visual.= '<div class="item" height=900" width="900">
                         <p><h1>'.$visual[$i].'</h1></p>
                        <img src="img_catalago_ofertas/img'.$i.'.jpg" alt="'.$img[$i].'"  width="900" height="900">
                        <div class="carousel-caption">
                         '.$img[$i].'
                        </div>
                    </div>';
}
*/

for ($i=1; $i <7 ; $i++) { 
     $img_visual.= '<div class="item">
                         <div class="col-lg-12 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-purple">
                                 <div class="inner">
                                 <h1>'.$visual[$i].'</h1>
                                 <a href="#" class="small-box-footer">
                                 More info <i class="fa fa-arrow-circle-right"></i>
                           </a>
                                 </div>
                              <div class="icon">
                                     <i class="fa fa-shopping-cart"></i>
                             </div>
                       </div>
             </div>
                       <div aligh="center"> <img src="img_all/img_catalago_ofertas/img'.$i.'.jpg" alt="'.$img[$i].'"    ></div>
                        <div class="carousel-caption">
                         '.$img[$i].'
                        </div>
                    </div>';
}

$img_visual.=' 
                    <div class="item active">
                         <div class="col-lg-12 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-purple">
                                 <div class="inner">
                                      <h1>'.$visual[$i].'</h1>
                                 <a href="#" class="small-box-footer">
                                 More info <i class="fa fa-arrow-circle-right"></i>
                           </a>
                                 </div>
                              <div class="icon">
                                     <i class="fa fa-shopping-cart"></i>
                             </div>
                          <a href="#" class="small-box-footer">
                                 More info <i class="fa fa-arrow-circle-right"></i>
                           </a>
                       </div>
             </div>
                        <div aligh="center"><img src="img_all/img_catalago_ofertas/img7.jpg" alt="'.$img[6].'"    ></div>
                    <div class="carousel-caption">
                        '.$img[7].'
                    </div>';




print $queso2= '<div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    '.$menu.'
                    </ol>
                <div class="carousel-inner">
                '.$img_visual.'

                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
</div>';

   $queso ='   <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                    </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <img src="img/img1.jpg" alt="First slide">
                        <div class="carousel-caption">
                         First Slide
                        </div>
                    </div>
                  
                    <div class="item">
                            <img src="img/img2.jpg" alt="Second slide" class="img-responsive" height="100">
                            <div class="carousel-caption">
                                 Second Slide
                            </div>
                    </div>
                    <div class="item active">
                        <img src="img/img4.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
';

?>