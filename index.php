<?php
echo '<pre><br><br><br>';


$class[1] = array('class' => '1', 'letter' => 'А', 'supervisor_id' => '3');
$class[2] = array('class' => '1', 'letter' => 'Б', 'supervisor_id' => '5');

$class[3] = array('class' => '2', 'letter' => 'А', 'supervisor_id' => '1');
$class[4] = array('class' => '2', 'letter' => 'Б', 'supervisor_id' => '4');

$class[5] = array('class' => '3', 'letter' => 'А', 'supervisor_id' => '2');

$class[6] = array('class' => '4', 'letter' => 'А', 'supervisor_id' => '8');
$class[7] = array('class' => '4', 'letter' => 'Б', 'supervisor_id' => '6');
$class[8] = array('class' => '4', 'letter' => 'B', 'supervisor_id' => '7');

$let = array (0,0,0,0,0);
$PATH ='http://localhost:63342/menu/index.php';

for ($i = 1; $i<=count($class); $i++)
{
   $j = $class[$i]['class'];
   $let[$j]++;
}

$bildMenu='';
for ($j = 1; $j<= 4; $j++)//1
{
   $submenu ='';
   if ($let[$j] > 1) //
   {
      for ($i = 1; $i<=count($class); $i++)//1
      {
         if ($class[$i]['class'] == $j)
            $submenu = $submenu . "<li><span></span><span><a href='".$PATH."/?menu=".$i."'>".$j."-".$class[$i]['letter']."</a></span></li>";
      }
      $bildMenu = $bildMenu . "<li><span></span><span>$j-й</span><ul>".$submenu."</ul></li>";
   }
   if ($let[$j] == 1) //
   {
      for ($i = 0; $i<=count($class); $i++)//1
      {
         if ($class[$i]['class'] == $j)
            $bildMenu = $bildMenu  . "<li><span></span><span><a href='".$PATH."/?menu=".$i."'>".$j."-й</a></span></li>";
      }

   }
}

?>


<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title>Школа</title>
   <meta name="generator" content="WYSIWYG Web Builder 15 - http://www.wysiwygwebbuilder.com">
   <script src="jscookmenu.min.js"></script>
   <link href="Безымянный1.css" rel="stylesheet">
   <link href="index.css" rel="stylesheet">
</head>

<body>
   <div id="wb_MenuBar1" style="position:absolute;left:62px;top:29px;width:230px;height:40px;z-index:1000;">
      <div id="MenuBar1">
         <ul style="display:none;">
            <li><span></span><span>Учні</span>
               <ul>
                  <?php echo $bildMenu; ?>
               </ul>
            </li>
            <li><span></span><span>Працівники школі</span>
               <ul>
                  <li><span></span><span><a href='http://localhost/menu/menu.php/?menu=4'>Технічний</a></span></li>
                  <li><span></span><span>Педагогічний</span>
                     <ul>
                        <li><span></span><span><a href='http://localhost/menu/menu.php/?menu=5'>Початкова школа</a></span></li>
                        <li><span></span><span>Середня школа</a></span></li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      <script>
         var cmMenuBar1 =
         {
            mainFolderLeft: '',
            mainFolderRight: '',
            mainItemLeft: '',
            mainItemRight: '',
            folderLeft: '',
            folderRight: '',
            itemLeft: '',
            itemRight: '',
            mainSpacing: 0,
            subSpacing: 0,
            delay: 100,
            offsetHMainAdjust: [0, 0],
            offsetSubAdjust: [0, 0]
         };
         var cmMenuBar1HSplit = [_cmNoClick, '<td class="MenuBar1MenuSplitLeft"><div></div></td>' +
            '<td class="MenuBar1MenuSplitText"><div></div></td>' +
            '<td class="MenuBar1MenuSplitRight"><div></div></td>'];
         var cmMenuBar1MainVSplit = [_cmNoClick, '<div><table width="15" cellspacing="0"><tr><td class="MenuBar1HorizontalSplit">|</td></tr></table></div>'];
         var cmMenuBar1MainHSplit = [_cmNoClick, '<td colspan="3" class="MenuBar1MainSplitText"><div></div></td>'];
         cmDrawFromText('MenuBar1', 'hbr', cmMenuBar1, 'MenuBar1');
      </script>
   </div>
</body>

</html>