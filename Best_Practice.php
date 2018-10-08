<?php


function Best_Practice($day)
{
 if(empty($day))
 {
  return false;
 }
 $openingDays=['friday','saturday','sunday'];

 return in_array(strtolower($day),$openingDays,true);
}



function Not_Best_Practice($day)
{
 if($day)
 {
  if(is_string($day))
  {
   $day = strtolower($day);
   if($day === 'friday')
   {
    return true;
   }
   elseif($day === 'saturday')
   {
    return true;
   }
   elseif($day === 'sunday')
   {
    return true;
   }
   else
   {
    return false;
   }
  }
 }
 else
 {
  return false;
 }
}

★ ► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄► ◄ ★
