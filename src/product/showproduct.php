<?php
include("../const.php");
if ($authority[6] == 0) {
    echo "<script language='javascript'>alert('对不起，你没有此操作权限！');history.back();</script>";
    exit;
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>编辑商品</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <style type="text/css">
        <!--
        .style1 {
            color: #FFFFFF
        }

        .STYLE2 {
            color: #FF0000
        }

        .STYLE3 {
            color: #009900;
        }

        -->
    </style>
</head>
<?php

include("../conn/conn.php");
$mtype = $_GET['mtype'];
$stype = $_GET['stype'];
//if($mtype=='')
//  	$mtype=1;
//  if($stype=='')
//  	$stype=1;
//echo $mtype;
//echo $stype;
?>
<script language=javascript>
    function Refresh() {

        var v = document.getElementsByTagName("input");
        for (var i = 0; i < v.length; i++) {
            if (v[i].type == "text") {
                v[i].value = "";
            }
        }
    }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php

if ($mtype == 1) {
    $sql = mysql_query("select count(*) as total from tb_product ", $conn);
} else if (($mtype != 1) and ($stype == 1)) {
    $sql = mysql_query("select count(*) as total from tb_product where maintype='" . $_GET['mtype'] . "'", $conn);

} else if (($mtype != 1) and ($stype != 1)) {
    $sql = mysql_query("select count(*) as total from tb_product where maintype='" . $_GET[mtype] . "'and subtype='" . $_GET[stype] . "'", $conn);
}
$info = mysql_fetch_array($sql);
$total = $info['total'];
if ($total == 0) {
    echo "本站暂无货品!";
} else {
    ?>
    <form name="form1" method="post" action="delproduct.php">
        <p>&nbsp;</p>
        <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="75" bgcolor="#666666">
                    <table width="857" height="98" border="0" cellpadding="0" cellspacing="1">
                        <tr bgcolor="#FFCF60">
                            <td height="20" colspan="10" align="center" bgcolor="#00CCFF">搜索：
                                <label>
                                    <select name="mtype" class="inputcss"
                                            onChange="javascript:window.open('showproduct.php?stype=1&mtype='+ this.value, '_self');">
                                        <OPTION value="1" <?php if (isset($mstype) && $mstype == 1) {
                                            echo "selected";
                                        } ?>>所有大类
                                        </OPTION>
                                        <?php
                                        $big = mysql_query("select * from table_itemclassify order by id desc", $conn);
                                        $maintype = mysql_fetch_array($big);
                                        do {
                                            ?>
                                            <option value=<?php echo $maintype['name']; ?> <?php if ($maintype['name'] == $mtype) {
                                                echo "selected";
                                            } ?>><?php echo $maintype['name']; ?></option>
                                            <?php
                                        } while ($maintype = mysql_fetch_array($big));
                                        ?>
                                    </select>
                                </label>
                                <label>
                                    <select name="stype" class="inputcss"
                                            onChange="javascript:window.open('showproduct.php?mtype=<?php echo $mtype; ?>&stype='+ this.value, '_self');">
                                        <option value="1" <?php if ($stype == 1) {
                                            echo "selected";
                                        } ?>>所有小类
                                        </option>
                                        <?php
                                        if ($mtype != 1) {
                                            $main = mysql_query("select * from table_itemclassify where name='" . $_GET['mtype'] . "'", $conn);
                                            $type = mysql_fetch_array($main);
                                            $temp = explode("|", $type['lowerclass']);
                                            echo $temp[0];
                                            for ($cnt = 0; $cnt < count($temp); $cnt++) {
                                                ?>
                                                <option value=<?php echo $temp[$cnt]; ?> <?php if ($temp[$cnt] == $stype) {
                                                    echo "selected";
                                                } ?>><?php echo $temp[$cnt]; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </label></td>
                        </tr>
                        <tr bgcolor="#FFCF60">
                            <td height="20" colspan="10" bgcolor="#0000CC">
                                <div align="center" class="style1">货品信息编辑</div>
                            </td>
                        </tr>
                        <tr>
                            <td width="56" height="28" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">复选</div>
                            </td>
                            <td width="91" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">货品编号</div>
                            </td>
                            <td width="78" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">名称</div>
                            </td>
                            <td width="98" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">类别</div>
                            </td>
                            <td width="74" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">规格</div>
                            </td>
                            <td width="70" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">计量单位</div>
                            </td>
                            <td width="87" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">库存上限</div>
                            </td>
                            <td width="87" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">库存下限</div>
                            </td>
                            <td width="96" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">添加时间</div>
                            </td>
                            <td width="109" bgcolor="#FFFFFF">
                                <div align="center" class="STYLE2">操作</div>
                            </td>
                        </tr>
                        <?php

                        $pagesize = 10;
                        if ($total <= $pagesize) {
                            $pagecount = 1;
                        }
                        if (($total % $pagesize) != 0) {
                            $pagecount = intval($total / $pagesize) + 1;

                        } else {
                            $pagecount = $total / $pagesize;

                        }

                        $_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 1;

                        if ($_GET['page'] == "") {
                            $page = 1;
                        } else {
                            $page = intval($_GET['page']);
                        }
                        if ($mtype == 1) {
                            $sql1 = mysql_query("select * from tb_product  order by addtime desc limit " . ($page - 1) * $pagesize . ",$pagesize", $conn);
                        } else if (($mtype != 1) and ($stype == 1)) {
                            $sql1 = mysql_query("select * from tb_product  where maintype='" . $_GET['mtype'] . "' order by addtime desc limit " . ($page - 1) * $pagesize . ",$pagesize", $conn);

                        } else if (($mtype != 1) and ($stype != 1)) {
                            $sql1 = mysql_query("select * from tb_product where subtype='" . $_GET[stype] . "'order by addtime desc limit " . ($page - 1) * $pagesize . ",$pagesize", $conn);
                        }

                        // $sql1=mysql_query("select * from tb_product  order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
                        while ($info1 = mysql_fetch_array($sql1)) {
                            ?>
                            <tr align="center" class="STYLE3">
                                <td height="25" bgcolor="#FFFFFF"><input type="checkbox"
                                                                         name="<?php echo $info1['id']; ?>"
                                                                         value=<?php echo $info1['id']; ?>></td>
                                <td height="25" bgcolor="#FFFFFF"
                                    onClick="setID(this);"><?php echo $info1['encode']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['name']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['maintype'];
                                    echo "/";
                                    echo $info1['subtype']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['size']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['unit']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['upperlimit']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['lowerlimit']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><?php echo $info1['addtime']; ?></td>
                                <td height="25" bgcolor="#FFFFFF"><a
                                            href="editproduct.php?id=<?php echo $info1['id']; ?>">更改</a></td>
                            </tr>
                            <?php
                        }

                        ?>
                    </table>
                </td>
            </tr>
        </table>
        <script language="javascript">
            function setID(td) {
                var tr = td.parentNode;
                window.opener.document.getElementById('item_id').value = tr.cells[1].innerHTML;
                window.opener.document.getElementById('item_name').value = tr.cells[2].innerHTML;
                window.opener.document.getElementById('item_model').value = tr.cells[4].innerHTML;
                window.opener.document.getElementById('item_unit').value = tr.cells[5].innerHTML;
                window.close();
            }
        </script>
        <table width="853" height="78" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="182">
                    <div align="left">
                        <input name="submit" type="submit" class="btn_2k3" id="submit" value="删除选择">
                        &nbsp;
                        <input type="reset" value="重新选择" class="btn_2k3">
                    </div>
                </td>
                <td width="671">
                    <div align="right">&nbsp;本类别共有货物
                        <?php
                        echo $total;
                        ?>
                        &nbsp;件&nbsp;每页显示&nbsp;<?php echo $pagesize; ?>&nbsp;件&nbsp;第&nbsp;<?php echo $page; ?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>
                        &nbsp;页
                        <?php
                        if ($page >= 2) {
                            ?>
                            <a href="showproduct.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a
                                    href="showproduct.php?id=<?php echo $id; ?>&page=<?php echo $page - 1; ?>&mtype=<?php echo $mtype; ?>&stype=<?php echo $stype; ?>"
                                    title="前一页"><font face="webdings"> 7 </font></a>
                            <?php
                        }
                        if ($pagecount <= 4) {
                            for ($i = 1; $i <= $pagecount; $i++) {
                                ?>
                                <a href="showproduct.php?page=<?php echo $i; ?>&mtype=<?php echo $mtype; ?>&stype=<?php echo $stype; ?>"><?php echo $i; ?></a>
                                <?php
                            }
                        } else {
                            for ($i = 1; $i <= 4; $i++) {
                                ?>
                                <a href="showproduct.php?page=<?php echo $i; ?>&mtype=<?php echo $mtype; ?>&stype=<?php echo $stype; ?>"><?php echo $i; ?></a>
                            <?php } ?>
                            <a href="showproduct.php?page=<?php echo $page - 1; ?>&mtype=<?php echo $mtype; ?>&stype=<?php echo $stype; ?>"
                               title="后一页"><font face="webdings"> 8 </font></a> <a
                                    href="showproduct.php?id=<?php echo $id; ?>&page=<?php echo $pagecount; ?>&mtype=<?php echo $mtype; ?>&stype=<?php echo $stype; ?>"
                                    title="尾页"><font face="webdings"> : </font></a>
                        <?php } ?>
                    </div>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
    </form>
    <?php
}
?>
</body>
</html>
