<?php require_once("header.php") ?><article>  <?php    $stage = $_GET['stage'];    if($stage == "create"){        }else    if($stage == "update"){        }else    if($stage == "new"){        }else    if($stage == "edit"){        }else    if($stage == "delete"){      $idintegrant = $_GET['idintegrant'];      $sqldelete = mysql_query("DELETE FROM integrant WHERE idintegrant = '$idintegrant'");            if ($sqldelete){        echo "<div id='aviso_acept'><img src='../img/logo_ok.png'></img> Membro foi excluido com sucesso.</div>";      }else{        echo "<div id='aviso_deny'>Houve algum problema ao excluir o Membro.</div>";      }    }else    if($stage == "index"){      echo "        <table class='mass'>				<tr>					<th>Imagem</th>					<th>Nome</th>					<th>Instrumento</th>					<th>A��es</th>				</tr>";      $search_members = mysql_query("SELECT `idintegrant`, `name`, `instrument`, `avatar` FROM `integrant` ORDER BY `name`");	      while($member = mysql_fetch_array($search_members))      {        if(($x % 2) == 1){ ?>        <tr class='trcomfundo' onmouseover="this.className='trcomfundoover'" onmouseout="this.className='trcomfundo'">        <?php }else{ ?>          <tr class='trsemfundo' onmouseover="this.className='trcomfundoover'" onmouseout="this.className='trsemfundo'">        <?php }           echo "          <td><img class='avatar' src='images/avatar/{$member['avatar']}'></img></td>          <td>{$member['name']}</td>          <td>{$member['instrument']}</td>          <td align='middle'><a class='edit' title='Editar {$member['name']}' href='members.php?stage=edit&idintegrant={$member['idintegrant']}'><img src='images/editar.png'></img></a>              <a class='delet' title='Excluir {$member['name']}' href='members.php?stage=delete&idintegrant={$member['idintegrant']}'><img src='images/exclui.png'></img></a></td>          </tr>";          $x++;      }        echo"</table>";    }  ?></article><?php require_once("footer.php") ?>