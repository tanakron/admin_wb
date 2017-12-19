<?PHP
    
    session_start();
    
    isset( $_POST['username'] ) ? $username = $_POST['username'] : $username = "";
    isset( $_POST['password'] ) ? $password = $_POST['password'] : $password = "";

    if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty($username) && !empty($password) ) {
        
        if( $username == "admin" && $password == "password" ) {
            
            $_SESSION['username'] = $username;
            header("Location:view_abstract.php");
            
        } else {
            
            echo "
                        <script>
                            alert('Username or Password incorrect');
                            window.location = 'index.php';
                        </script>
                    ";
            
        }
        
    }
    
?>