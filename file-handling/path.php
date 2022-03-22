<html>
    <pre>
        <?php
            print_r(pathinfo("G:\RESUME\New folder\ResumeMar22.pdf"));
            echo "<br>";
            print_r(pathinfo("G:/RESUME/New folder/ResumeMar22.pdf"));
            echo "<br>";
            print_r(pathinfo("G:/RESUME/New folder/NotFoundFile.pdf"));
        ?>
    </pre>
</html>