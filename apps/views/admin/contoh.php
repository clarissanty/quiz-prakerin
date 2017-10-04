<div class="col-lg-12">
                            <hr>
                            <h2 class="intro-text text-center">Post
                        
                            </h2>
                            <hr>
                        </div>

                </tr>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                        <center>(Silakan isi tabel di bawah ini..)</center>
                        <form method="post" name="category" id="contactForm" >
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" id="Title" required data-validation-required-message="Please enter your title post.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div>
                                    <br/>
                                    <label>Content : </label>
                                    <br/>
                                    <textarea id="posting" name="posting" ></textarea>
                                        <script type="text/javascript">
                                        var editor = CKEDITOR.replace('posting');
                                        </script>
                                </div>
                            </div>
                            <div class="row control-group">
                                <br/>
                                    <label>Category :</label>
                                    <div class="input-field col s6">
                                        <?php 
                                        $dataSql = $connect->execute("select * from tbl_category");
                                        while ($row = $dataSql->fetch_object()) {
                                        echo '<select name="name_category" class="browser-default"';
                                        echo '<option>---Pilih Category---</option>';
                                        echo '<option value="' . $row['id_category'] . '">' . $row['name_category'] . '</option>';
                            
                                        echo '</select>';
                                        }
                                        ?>

                                    </div>
                            </div>
                            <div>
                                <br/>
                                <center>
                                    <button type="submit" name="btn_insertPost_auth">SIMPAN</button>
                                </center>
                            </div>
                        </form>