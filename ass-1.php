<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
printf("Input number of data: ");
fscanf(STDIN, "%d", $data);
for($i=1; $i<=$data; $i++){
    printf("Input score %d: ", $i);
    fscanf(STDIN, "%f",$a);
    $b=$b+$a;
}
printf("The average score =  %.2f\n", $as=$b/$data);
?>