<?php 
require_once('./src/controller/homepage.php');
require_once('./src/controller/mojito.php');
require_once('./src/controller/blue-lagoon.php');
require_once('./src/controller/punch.php');
require_once('./src/controller/sexAndTheBeach.php');
require_once('./src/controller/bloodymarry.php');
require_once('./src/controller/margarita.php');
require_once('./src/controller/screwdriver.php');
require_once('./src/controller/mimosa.php');
require_once('./src/controller/manhattan.php');
require_once('./src/controller/longisland.php');
require_once('./src/controller/martini.php');
require_once('./src/controller/drole.php');
require_once('./src/controller/pinacoloda.php');
require_once('./src/controller/login.php');
require_once('./src/controller/login_submit.php');
require_once('./src/controller/register.php');
require_once('./src/controller/register_submit.php');
require_once('./src/controller/Erreur404.php');
require_once('./src/controller/editcoktail.php');
require_once('./src/controller/post_update_coktail.php');
require_once('./src/controller/createpost.php');
require_once('./src/controller/create_post_submit.php');
require_once('./src/controller/drole_delete.php');



try {
        if (isset($_GET['page']) && $_GET['page'] !== '') {
                if ($_GET['page'] === 'mojito.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            mojitopage($coktailId);
                            } else {
                            throw new Exception('Aucun identifiant de post envoyé');    
                    
                            }
                    } elseif($_GET['page'] === 'blue-lagoon.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            blueLagoonpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                        }elseif($_GET['page'] === 'drole.php') {
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                                $coktailId = $_GET['id'];
                                $coktailName = $_GET['name'];
                        
                                drolepage($coktailId);
        
        
                        } else {
                            throw new Exception('Aucun identifiant de post envoyé');    
                        
                        }
                        } elseif($_GET['page'] === 'drole_delete.php') {
                                if (isset($_GET['id']) && $_GET['id'] > 0) {
                                        $coktailId = $_GET['id'];
                                
                                        droleDeletepage($coktailId);
                
                
                                } else {
                                    throw new Exception('Aucun identifiant de post envoyé');    
                                
                                }
                                }elseif($_GET['page'] === 'punch.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            punchpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'sexAndTheBeach.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            sexAndTheBeachpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'bloodymarry.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            bloodyMarypage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'margarita.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            margaritapage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'mimosa.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            mimosapage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'manhattan.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            manhattanpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'longisland.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            longislandpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'martini.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            martinipage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                    }elseif($_GET['page'] === 'screwdriver.php') {
                            if (isset($_GET['id']) && $_GET['id'] > 0) {
                                    $coktailId = $_GET['id'];
                                    $coktailName = $_GET['name'];
                            
                            screwdriverpage($coktailId);
            
            
                            } else {
                                throw new Exception('Aucun identifiant de post envoyé');    
                            
                            }
                            
                        }elseif($_GET['page'] === 'pinacolada.php') {
                        if (isset($_GET['id']) && $_GET['id'] > 0) {
                                $coktailId = $_GET['id'];
                                $coktailName = $_GET['name'];
                        
                                pinacoladapage($coktailId);
        
        
                        } else {
                            throw new Exception('Aucun identifiant de post envoyé');    
                        
                        }
                        
                        }elseif($_GET['page'] === 'login.php') {               
                                    
                            loginpage();
            
                        }elseif($_GET['page'] === 'register.php') {                
                                    
                            registerpage();
            
                        }elseif($_GET['page'] === 'createpost.php') {
            
                            createPostpage();
        
                        }elseif($_GET['page'] === 'create_post_submit.php') {
            
                            createPostSubmitpage();
            
                        }elseif($_GET['page'] === 'login_submit.php') {
            
                            loginSubmitpage();
            
                        }elseif($_GET['page'] === 'register_submit.php') {
            
                            registerSubmitpage();
            
                        }elseif($_GET['page'] === 'editcoktail.php') {
                                if (isset($_GET['name'])) {
                                // var_dump($_GET['description']);
                                // var_dump($_GET['picture']);

                                $datas = array(
                                        "coktailName" => $_GET['name'],
                                        "coktailId" => $_GET['id'],
                                        "coktailDescription" => $_GET['description'],
                                        "coktailPicture" => $_GET['picture'],
                                );
                                                
                                editCoktailPage($datas);
        
        
                        } else {
                            throw new Exception('Aucun nom de post envoyé');    
                        
                        }
                        }elseif($_GET['page'] === 'post_update_coktail.php') {
            
                                postUpdateCoktailSubmitpage();
                
                        }else {
                        Errorpage();    
                }
            } else {
                    homepage();
            }
            
} catch (Exception $e) {
        echo 'Erreur : '.$e->getMessage();
}


