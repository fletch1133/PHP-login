<?php
    include_once 'header.php';
?>

    <section class="index-intro">
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] . "</p>"; 
        } 
        ?>
        <h1>This is an Introduction</h1>
        <p>Here is a paragraph that explains the purpose of the website</p>
    </section>

    <section class="index-categories">
        <h2>Some basic categories</h2> 
        <div class="index-categories-list">
            <div>
                <h3>Fun Things</h3>
            </div>
            <div>
                <h3>Serious Items</h3>
            </div>
            <div>
                <h3>Exciting Items</h3>
            </div>
            <div>
                <h3>Boring Things</h3> 
            </div>
        </div> 
    </section>
    
    <?php
    include_once 'footer.php'; 
?>