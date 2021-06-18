<?= view('frontend/places')?>
<div class="mt-5 p-3">
    <div class="row p-5 border border-dark">
        <div class="col"><h2>Tophane</h2></div>
        <div class="col flex-column align-self-center text-right">
            <div class="col-12"><a href="#tophaneyorumyap" data-toggle="collapse">yorum yap</a></div>
            <div class="col-12"><a href="#tophaneyorumlar" data-toggle="collapse">1 yorum</a></div>
        </div>
        <div class="col-12 pb-4 collapse border border-light" id="tophaneyorumyap">
            <h3>Yorumunuz:</h3>
            <form action="<?php echo base_url('dashboard/comment');?>" method="post">
            <textarea class="form-control" name="comment"></textarea>
            <input type="hidden" value="<?= 1?>" name="placeid">
            <input class="btn btn-primary mt-2" type="submit">
            </form>
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="tophaneyorumlar">
            <h3>Yorumlar:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="card">
                        <div class="row g-0 mt-4 mb-2">
                            <div class="col-auto">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" style="max-width: 120px">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Eda Altuntaş</h5>
                                    <p class="card-text">Çok kötü çok</p>
                                    <p class="card-text"><small class="text-muted">3 dakika önce</small></p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row p-5 border border-dark border-top-0">
        <div class="col"><h2>BTÜ</h2></div>
        <div class="col flex-column align-self-center text-right">
        <div class="col-12"><a href="#btuyorumyap" data-toggle="collapse">yorum yap</a></div>
        <div class="col-12"></div>
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="btuyorumyap">
            <h3>Yorumunuz:</h3>
            <textarea class="form-control"></textarea>
            <input class="btn btn-primary mt-2" type="submit">
        </div>
    </div>
    <div class="row p-5 border border-dark border-top-0">
        <div class="col"><h2>Uludağ Üniversitesi</h2></div>
        <div class="col flex-column align-self-center text-right">
        <div class="col-12"><a href="#uludagyorumyap" data-toggle="collapse">yorum yap</a></div>
        <div class="col-12"><a href="#uludagyorumlar" data-toggle="collapse">1 yorum</a></div>
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="uludagyorumyap">
            <h3>Yorumunuz:</h3>
            <textarea class="form-control"></textarea>
            <input class="btn btn-primary mt-2" type="submit">
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="uludagyorumlar">
            <h3>Yorumlar:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" style="max-width: 120px">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Eda Altuntaş</h5>
                                    <p class="card-text">Çok kötü çok</p>
                                    <p class="card-text"><small class="text-muted">3 dakika önce</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row p-5 border border-dark border-top-0">
        <div class="col"><h2>Park</h2></div>
        <div class="col flex-column align-self-center text-right">
        <div class="col-12"><a href="#parkyorumyap" data-toggle="collapse">yorum yap</a></div>
        <div class="col-12"><a href="#parkyorumlar" data-toggle="collapse">1 yorum</a></div>
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="parkyorumyap">
            <h3>Yorumunuz:</h3>
            <input type="hidden" value="">
            <textarea class="form-control"></textarea>
            <input class="btn btn-primary mt-2" type="submit">
        </div>
        <div class="col-12 pb-4 collapse border border-secondary" id="parkyorumlar">
            <h3>Yorumlar:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="card">
                        <div class="card-header">
                                Eda Altuntaş
                            </div>
                        <div class="row g-0">
                            <div class="col-auto">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid" style="max-width: 120px">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <p class="card-title">Çok kötü çok</p>
                                    <p class="card-text"><small class="text-muted">Zaman</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>