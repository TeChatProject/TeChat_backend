<?= view('frontend/places')?>
<div class="mt-5 p-3">
<?php foreach($allPlaces as $place):?>
    <div class="row p-5 border border-dark">
        <div class="col"><h2><?= $place['places_name']?></h2></div>
        <div class="col flex-column align-self-center text-right">
        <div class="col-12"><a href="#<?=$place['places_id']?>yorumyap" data-toggle="collapse">yorum yap</a></div>
        <?php $sorgu = $comments->where('places_id',$place['places_id'])->findAll();
        if(count($sorgu)!=0){?>
            <div class="col-12"><a href="#<?=$place['places_id']?>yorumlar" data-toggle="collapse"><?=count($sorgu)?> yorum</a></div><?php }?>
        </div>
        <div class="col-12 pb-4 collapse border border-light" id="<?=$place['places_id']?>yorumyap">
            <h3>Yorumunuz:</h3>
            <form action="<?php echo base_url('dashboard/comment');?>" method="post">
            <textarea maxlength="100" class="form-control" name="text"></textarea>
            <input type="hidden" value="<?= $place['places_id']?>" name="placeid">
            <input class="btn btn-primary mt-2" type="submit">
            </form>
        </div>
        
        <div class="col-12 pb-4 collapse border border-secondary" id="<?=$place['places_id']?>yorumlar">
            <h3>Yorumlar:</h3>
            <ul class="list-group">
            <?php if(count($sorgu)!=0):?>
            <?php foreach($sorgu as $comm):?>
            <li class="list-group-item">
                    <div class="card">
                        <div class="card-header">
                                <?php $qw = $userModel->where('id',$comm['commenter'])->first(); echo $qw['ad']." ".$qw['soyad'];?>
                            </div>
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="<?=base_url($userInfo['ppPath'])?>" class="img-fluid" style="max-width: 120px">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <p class="card-title"><?=$comm['comment_text']?></p>
                                    <p class="card-text"><small class="text-muted"><?=$comm['comment_time']?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <?php endforeach;endif;?>
        </div>
    </div>
    <?php endforeach;?>