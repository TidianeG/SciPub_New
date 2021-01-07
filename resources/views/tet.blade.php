            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('assets/img/logo.JPG')}}" alt="Logo"></a>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
                            <form action="" method="post">
                            @csrf
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 ">
                                        <label for="inputEmail" class="">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 ">
                                        <label for="inputPassword" class="">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 col-sm-12 ">
                                        <label for="inputPassword" class=" ">Date Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row "> 
                                    <div class="form-group col-12 col-sm-12 ">
                                        <label for="inputPassword" class="">Lieu Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Entrer Lieu">
                                        </div>
                                    </div>
                                </div>
                                <div class="">         
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>      
                        <!-- Modal footer -->                
                    </div>
                </div>
            </div>