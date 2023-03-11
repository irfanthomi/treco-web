<?php


function success($title, $text)
{

  return "<script type='text/javascript'>
                $(document).ready(function() {
                  new PNotify({
                                  title: '$title',
                                  text: '$text',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              })
                              })
               </script>";
}
function danger($title, $text)
{
  return "<script type='text/javascript'>
                $(document).ready(function() {
                  new PNotify({
                                  title: '$title',
                                  text: '$text',
                                  type: 'error',
                                  styling: 'bootstrap3'
                              })
                              })
               </script>";
}