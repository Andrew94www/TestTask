<?php  
/* Немного поправил решение ;)
 Из m точек образуеться m-1 квадратов
   из n точек образуеться n-1 квадратов
*/
function countRectangle($m,$n){   
  $result = 0;
  for ($i = $m-1; $i >= 1; $i--) {
    for ($k = $n-1; $k >= 1; $k--) {
      $result  =  $result+ $i*$k;
    }
}
 return $result;
}  
//echo countRectangle(3,3); 
//результат 9
// квадрат 4 x 4 результат 36

/*Логика россуждений остаеться таже что описано в предыдущем коммите с учетом вышеприведенного комента ;)
*/
function countFormulaRectangle($m,$n){ 
 $rectangleCount = ($m*($m-1)/2)*($n*($n-1)/2);
 return $rectangleCount;
} 
//echo countFormulaRectangle(3,3);
