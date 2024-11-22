<h1>HELLO </h1>
<?php 

//include_once 'function/select/root.php' ;
 

$_SESSION["option"] = "index" ; 
include_once 'function/select/root.php' ; 

 
 
?>

<div class="parent_projet" >
    <div class="parent_projet0">
        <div class="parent_projet1">
            <img src="https://cdn.pixabay.com/photo/2019/10/16/09/09/doraemon-4553920_1280.png" alt="" srcset="">
        </div>
        <div class="parent_projet2">
            <h2>Card</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur aut dolor eaque provident facere inventore
                commodi fugiat earum illo necessitatibus voluptatibus
                ab, reiciendis
                tempore eius, dolore corrupti, vel ipsum. Doloremque.
            </p>
        </div>
    </div>

</div>

<div class="id_sha1_user" title="jes un deklddzkdhjsdhjshd" onclick="root(this)"> HOME</div>
<?php 
 


  

?>
<style>
 img {
    width: 100px;
 }

    .parent_projet1,
    .parent_projet2 {

        width: 300px;
        margin: auto;

    }

    .parent_projet2 {
        text-align: center;
    }

    .parent_projet2 p {
        text-align: justify;
    }

    .parent_projet1 img {
        width: 100%;
    }
    .parent_projet1 img:hover {
     cursor: pointer;
    }

    .parent_projet0 {
        border: 1px solid rgba(0, 0, 0, 0.3);
        width: 300px;
    
        margin: auto;
    }

    .parent_projet0 {
        border: 1px solid rgba(0, 0, 0, 0.3);
        width: 300px;
        padding: 15px;
    
        margin: auto;
    }
</style>

<script>
    function parent_projet() {
        window.location.replace("add_img/index.php");
    }
</script>