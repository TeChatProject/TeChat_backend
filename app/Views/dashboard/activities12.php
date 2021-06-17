<?= view("frontend/activities")?>
<div class="mt-5">
    <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">

                        <div class="filter-result">


                            <div class="job-box align-items-center justify-content-between mb-30">

                              <form>

                              <table style="width: 100%;">
                              <tbody style="width: 100%;">
                              <tr style="width: 100%;">
                                <td style="width: 90%;">
                                <div>

                                <input type="text" placeholder="Etkinlik Basligi" style="width: 80%; height: 32px; border: 1.5px solid darkbrown; border-style: ridge; border-radius: 2px;">

                                </div>
                                </td>

                                <td style="width: 10%;">

                                <div class="col-md-3 col-sm-3" style="width: 100%;">

                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiP1 multiP2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                </svg>
                                </button>

                                </div>  

                                </td>

                              </tr>
                              </tbody>
                              </table>


                            <hr>

                            <table style="width: 100%;">
                            <tbody style="width: 100%;">
                            
                            <tr style="width: 100%">

                              <td style="width: 80%">
                                <div class="collapse multi-collapse" id="multiP1" style="float: top;">
                                    <div style="width: 100%; border: 0px;">

                                    <textarea maxlength="300" placeholder="Tell about the event" style="border: 1.5px solid darkbrown; border-style: inset; border-radius: 2px; width: 95%; resize: vertical; height: 170px;">
                                    </textarea>

                                    </div>
                                </div>
                              </td>


                              <td style="width: 20%;">
                                <div class="collapse multi-collapse" id="multiP2" style="text-align: center;">

                                  <div>
                                  <input type="date" class="form-control2" style="height: 30px;"></input>
                                  </div>

                                  </br>

                                  <div>
                                    <select>
                                      <option>Park</option>
                                      <option>University</option>
                                      <option>River</option>
                                      <option>Moon</option>
                                    </select>
                                  </div>

                                  </br>

              
                                  <div class="col-md-3 col-sm-3" style="width: 100%; border: 0px;">
                                    <button class="btn btn-primary" type="button" onmouseover="this.style.backgroundColor = '#35E53B';" onmouseout="this.style.backgroundColor = '#428BCA'">Etkinlik Ekle</button>
                                  </div>

                                </div>
                              
                              </td>

                              </tr>
                            </tbody>
                            </table>

                            </form>

                            </div>






                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">

                            <div class="job-left my-4 d-md-flex align-items-center flex-wrap">

                                <table style="width: 100%;">
                                    <tbody>
                                    <tr style="font-weight: bold;"> 
                                        <td width="40%">
                                        Header : Gaming Night
                                        </td>
                                        <td width="30%">
                                        Event Type : Gamin
                                        </td>
                                        <td width="30%">
                                        by Mr.Rekt_Lord  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" width="100%">

                                        
                                        </br>
                                        <p>The descripton of the evvvvvent gonna be riiight just only for once HEEEEEERERE cmooooon m8 do work</p>
                                        

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            

                                &nbsp;&nbsp;&nbsp;
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
                                </div>

                            </div>





                    
                </div>
            </div>



    </div>
    </div>
</div>
</body>
</html>
    