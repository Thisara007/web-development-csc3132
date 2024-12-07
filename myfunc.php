<?php

function print_table($name,$connect,$arr){
    //query
    try{
    
        $sql="select ";
        for($i=0; $i<sizeof($arr)-1;$i++){
            $sql.=$arr[$i].",";
        }
        $sql .=$arr[sizeof($arr)-1]." from $name";
    
        //$sq1="SELECT * FROM $name";
    
        //execute the query
        $result=mysqli_query($connect,$sql);
    
        //check if data exists in the table
        if(mysqli_num_rows($result)>0){
            echo "<table border='1'>";
            $col=mysqli_fetch_fields($result);
            echo "<tr>";
            foreach($arr as $col){
                echo "<td>$col</td>";
            }
            echo "</tr>";
           
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                foreach($row as $key=>$value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No results";
        }
    }
    catch(Exception $e){
        die($e->getmessage());
    }
    }
    function get_student($connect){
        //query
        try{
        
            $sql="select id,name,age from students  ";
            
        
            //$sq1="SELECT * FROM $name";
            
        
            //execute the query
            $result=mysqli_query($connect,$sql);
        
            //check if data exists in the table
            if(mysqli_num_rows($result)>0){
                echo "<table border='1'>";
                $col=mysqli_fetch_fields($result);
                echo "<tr>";
                foreach($col as $value){
                    echo "<td>$value->name</td>";
                }
                echo "<td>Marks</td>";
                echo "</tr>";
                

               
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<td>$value</td>";
                    }
                    $id=$row['id'];
                    echo "<td><a href='StudentDetails.php?id=$id'>View</a></td>";
                    echo "</tr>";
                   
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        }
        catch(Exception $e){
            die($e->getmessage());
        }
        }
    
    function search_student($name,$connect){
        try{
    
            $sql="select * from students where name like '%$name%' ";
            
           
            $result=mysqli_query($connect,$sql);
        
            //check if data exists in the table
            if(mysqli_num_rows($result)>0){
                echo "<table border='1'>";
                $col=mysqli_fetch_fields($result);
                echo "<tr>";
                foreach($col as $value){
                    echo "<td>$value->name</td>";
                }
                echo "</tr>";
               
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        }
        catch(Exception $e){
            die($e->getmessage());
        }
    }
    function getstudentdetails($id,$connect){
        try{
    
            $sql="select * from students where id='$id' ";
            
           
            $result=mysqli_query($connect,$sql);
        
            //check if data exists in the table
            if(mysqli_num_rows($result)>0){
                echo "<table border='1'>";
                $col=mysqli_fetch_fields($result);
                echo "<tr>";
                foreach($col as $value){
                    echo "<td>$value->name</td>";
                }
                echo "</tr>";
               
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    foreach($row as $key=>$value){
                        echo "<td>$value</td>";
                    }
                    $id=$row['id'];
                    echo "<td><a href='StudentDetails.php?id=$id'>View</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "No results";
            }
        }
        catch(Exception $e){
            die($e->getmessage());
        }
    }
    

    ?>