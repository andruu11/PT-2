                                        <?php
                                        session_start();
                                        //Inicio de Sesion
                                        class Users{
                                        public $objDb;
                                        public $objSe;
                                        public $result;
                                        public $rows;
                                        public $useropc;
                                        public function __construct()   {
                                        $this->objDb                         = new Database();
                                        $this->objSe                         = new Sessions();
                                        }
                                        public function login_in(){
                                        $sth                                 = $this->objDb->prepare('SELECT * FROM `usuario` INNER JOIN tipo_usuario ON usuario.id_tipo_usuario = tipo_usuario.id_tipo_usuario 
                                                                                                    INNER JOIN cuenta ON cuenta.id_cuenta = usuario.id_cuenta 
                                                                                                    INNER JOIN persona ON persona.id_persona = usuario.id_persona 
                                                                                                    WHERE usuario.pin = :pass AND usuario.usuario = :usu');
                                        $password                            =$_POST["password"];
                                        $pass                                =$_POST["password"];
                                        //$pass                                =sha1(md5($password));
                                        
                                        $sth->bindParam(':usu', $_POST["usuario"]);
                                        $sth->bindParam(':pass',$pass);
                                        $sth->execute();
                                        $result                              = $sth->fetchAll();
                                        if($result) {
                                        $profile                             = $result[0]['des_tipo_usuario'];
                                        $_SESSION['esteusuario'] = $result[0]['usuario'];
                                        switch($profile){

                                        //Caso del administrador
                                        case 'Administrador':
                                        $this->objSe->init();
                                        $this->objSe->set('id_usuario', $result[0]['id_usuario']);
                                        $this->objSe->set('usuario', $result[0]['usuario']);
                                        $this->objSe->set('estado', $result[0]['estado']);
                                        $this->objSe->set('id_tipo_usuario', $result[0]['id_tipo_usuario']);
                                        $this->objSe->set('des_tipo_usuario', $result[0]['des_tipo_usuario']);
                                        $this->objSe->set('id_persona', $result[0]['id_persona']);
                                        $this->objSe->set('nombres', $result[0]['nombres']);
                                        $this->objSe->set('apellidos', $result[0]['apellidos']);
                                        $this->objSe->set('correos', $result[0]['correos']);
                                        $this->objSe->set('id_cuenta', $result[0]['id_cuenta']);
                                        //header('Location: ../vista/views/views_administrador/index_administrador.php');
                                        header('Location: ../vista/views/views_administrador/index_administrador.php');
                                        //href = "../farmacita/vista/views/views_sadministrador/index_sadministrador.php";
                                        
                                        break;


                                        //Caso Tutor
                                        case 'Tutor':
                                        $this->objSe->init();
                                        $this->objSe->set('id_usuario', $result[0]['id_usuario']);
                                        $this->objSe->set('usuario', $result[0]['usuario']);
                                        $this->objSe->set('estado', $result[0]['estado']);
                                        $this->objSe->set('id_tipo_usuario', $result[0]['id_tipo_usuario']);
                                        $this->objSe->set('des_tipo_usuario', $result[0]['des_tipo_usuario']);
                                        $this->objSe->set('id_persona', $result[0]['id_persona']);
                                        $this->objSe->set('nombres', $result[0]['nombres']);
                                        $this->objSe->set('apellidos', $result[0]['apellidos']);
                                        $this->objSe->set('correos', $result[0]['correos']);
                                        $this->objSe->set('id_cuenta', $result[0]['id_cuenta']);
                                        header('Location: ../vista/views/views_tutor/index_tutor.php');
                                        break;


                                        //Caso Familiar
                                        case 'Familiar':
                                        $this->objSe->init();
                                        $this->objSe->set('id_usuario', $result[0]['id_usuario']);
                                        $this->objSe->set('usuario', $result[0]['usuario']);
                                        $this->objSe->set('estado', $result[0]['estado']);
                                        $this->objSe->set('id_tipo_usuario', $result[0]['id_tipo_usuario']);
                                        $this->objSe->set('des_tipo_usuario', $result[0]['des_tipo_usuario']);
                                        $this->objSe->set('id_persona', $result[0]['id_persona']);
                                        $this->objSe->set('nombres', $result[0]['nombres']);
                                        $this->objSe->set('apellidos', $result[0]['apellidos']);
                                        $this->objSe->set('correos', $result[0]['correos']);
                                        $this->objSe->set('id_cuenta', $result[0]['id_cuenta']);
                                        header('Location: ../vista/views/views_familiar/index_familiar.php');
                                        break;
                                        }
                                        }else{
                                        header('Location: ../login.php?error=1');
                                        }
                                        }
                                        }
                                        ?>