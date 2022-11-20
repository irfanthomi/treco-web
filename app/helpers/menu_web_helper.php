<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
ob_start();
function main_menu($positionM)
{
  $ci = &get_instance();
  $query = $ci->db->query("SELECT id_menu, nama_menu, link, id_parent ,position FROM menu where aktif='Ya' AND position='" . $positionM . "' order by urutan");
  $menu = array('items' => array(), 'parents' => array());
  foreach ($query->result() as $menus) {
    $menu['items'][$menus->id_menu] = $menus;
    $menu['position'][$menus->position] = $menus->position;
    $menu['parents'][$menus->id_parent][] = $menus->id_menu;
  }
  if ($menu) {
    $result = build_main_menu(0, $menu);
    return $result;
  } else {
    return FALSE;
  }
}

function build_main_menu($parent, $menu)
{
  $html = "";
  if (isset($menu['parents'][$parent])) {
    if ($parent == '0') {
      $html .= " <ul  >";
      if (isset($menu['position']['Bottom']) == "Bottom") {
        $html .= "<li class=' active-nav text-uppercase'  ><a  href='" . base_url() . "' > Home</li>";
      } else {
      }
    } else {
    }
    foreach ($menu['parents'][$parent] as $itemId) {
      if (!isset($menu['parents'][$itemId])) {
        if ($menu['items'][$itemId]->id_parent == '0') {
          if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
            $html .= "<li class='text-uppercase'><a target='_BLANK' href='" . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          } else {
            $html .= "<li class='text-uppercase'><a href='" . base_url() . '' . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          }
        } elseif ($menu['items'][$itemId]->id_parent == $menu['items'][$itemId]->id_parent) {
          if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
            $html .= "<li class='text-uppercase' ><a target='_BLANK' href='" . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          } else {
            $html .= "<li class='text-uppercase' ><a href='" . base_url() . '' . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          }
        } else {
          if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
            $html .= "<li class='text-uppercase' ><a target='_BLANK' href='" . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          } else {
            $html .= "<li class='text-uppercase' ><a href='" . base_url() . '' . $menu['items'][$itemId]->link . "' >" . $menu['items'][$itemId]->nama_menu . "</a></li>";
          }
        }
      } elseif (isset($menu['parents'][$itemId])) {
        if ($menu['items'][$itemId]->id_parent == '0') {
          $html .= "<li  class='dropdown text-uppercase'>";
        } elseif ($menu['items'][$itemId]->id_parent != '0') {
          //  $id_parent = count($menu['items'][$itemId]->id_parent);
          if ($menu['items'][$itemId]->id_parent > 1 and  $menu['items'][$itemId]->id_menu ==  $menu['items'][$itemId]->id_parent) {
            $html .= "<li >";
          } else {
            $html .= "<li class='dropdown text-uppercase'>";
          }
        } elseif ($menu['items'][$itemId]->id_parent == $menu['items'][$itemId]->id_parent) {
          $html .= "<li>";
        }
        if ($menu['items'][$itemId]->id_parent == $menu['items'][$itemId]->id_parent) {
          if (preg_match("/^http/", $menu['items'][$itemId]->link)) {
            $html .= "<a href='javascript:avoid(0);'>" . $menu['items'][$itemId]->nama_menu . " </a>
                <ul>";
          } else {
            //  dropdown
            $html .= "<a href='javascript:avoid(0);' >" . $menu['items'][$itemId]->nama_menu . " </a> 
               <ul>";
          }
        } else {
          // if(preg_match("/^http/", $menu['items'][$itemId]->link)) {
          //   $html .= "<a id='navbarDropdownMenuLink' target='_BLANK' href='".$menu['items'][$itemId]->link."' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link'>".$menu['items'][$itemId]->nama_menu." <i class='fa fa-angle-down'></i></a><ul aria-labelledby='navbarDropdownMenuLink' class='dropdown-menu' style='    top: -50px;
          //    left: 100%;
          //    margin-top: -2px;
          //    font-size: 1rem;'> "; 
          // }else{
          //   $html .= "<a id='navbarDropdownMenuLink' href='".base_url().''.$menu['items'][$itemId]->link."' class='nav-link' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='nav-link'>".$menu['items'][$itemId]->nama_menu." <i class='fa fa-angle-down'></i></a> <ul aria-labelledby='navbarDropdownMenuLink' class='dropdown-menu' style='    top: -50px;
          //    left: 100%;
          //    margin-top: -2px;
          //    font-size: 1rem;'>";
          // }
        }

        $html .= build_main_menu($itemId, $menu);
        if ($menu['items'][$itemId]->id_parent > 1 and  $menu['items'][$itemId]->id_parent == $menu['items'][$itemId]->id_menu) {
          $html .= "</li></ul>";
        }
        $html .= "</ul>";
      }
    }
  }
  return $html;
}



function widget($param)
{
  $CI = &get_instance();
  return $CI->db->get_where('widget', array('bagian' => $param));
}