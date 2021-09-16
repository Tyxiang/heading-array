<?php
function heading_parse($html)
{
    $raw = array();
    $array = array();
    //$html = str_replace(array("\r\n", "\n", "\r"), '', $html);
    $raw = explode('<h1>', $html);
    for ($h1 = 0; $h1 < count($raw); $h1++) {
        if ($h1 > 0) {
            $array['h1'][$h1 - 1]['title'] = substr($raw[$h1], 0, strpos($raw[$h1], '</h1>'));
            $last = substr($raw[$h1], strpos($raw[$h1], '</h1>') + 5);
            $raw[$h1] = explode('<h2>', $raw[$h1]);
            $array['h1'][$h1 - 1]['content'] = substr($raw[$h1][0], strpos($raw[$h1][0], '</h1>') + 5);
            $array['h1'][$h1 - 1]['others'] = substr($last, strlen($array['h1'][$h1 - 1]['content']));
            for ($h2 = 0; $h2 < count($raw[$h1]); $h2++) {
                if ($h2 > 0) {
                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['title'] = substr($raw[$h1][$h2], 0, strpos($raw[$h1][$h2], '</h2>'));
                    $last = substr($raw[$h1][$h2], strpos($raw[$h1][$h2], '</h2>') + 5);
                    $raw[$h1][$h2] = explode('<h3>', $raw[$h1][$h2]);
                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['content'] = substr($raw[$h1][$h2][0], strpos($raw[$h1][$h2][0], '</h2>') + 5);
                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['others'] = substr($last, strlen($array['h1'][$h1 - 1]['h2'][$h2 - 1]['content']));
                    for ($h3 = 0; $h3 < count($raw[$h1][$h2]); $h3++) {
                        if ($h3 > 0) {
                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['title'] = substr($raw[$h1][$h2][$h3], 0, strpos($raw[$h1][$h2][$h3], '</h3>'));
                            $last = substr($raw[$h1][$h2][$h3], strpos($raw[$h1][$h2][$h3], '</h3>') + 5);
                            $raw[$h1][$h2][$h3] = explode('<h4>', $raw[$h1][$h2][$h3]);
                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['content'] = substr($raw[$h1][$h2][$h3][0], strpos($raw[$h1][$h2][$h3][0], '</h3>') + 5);
                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['others'] = substr($last, strlen($array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['content']));
                            for ($h4 = 0; $h4 < count($raw[$h1][$h2][$h3]); $h4++) {
                                if ($h4 > 0) {
                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['title'] = substr($raw[$h1][$h2][$h3][$h4], 0, strpos($raw[$h1][$h2][$h3][$h4], '</h4>'));
                                    $last = substr($raw[$h1][$h2][$h3][$h4], strpos($raw[$h1][$h2][$h3][$h4], '</h4>') + 5);
                                    $raw[$h1][$h2][$h3][$h4] = explode('<h5>', $raw[$h1][$h2][$h3][$h4]);
                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['content'] = substr($raw[$h1][$h2][$h3][$h4][0], strpos($raw[$h1][$h2][$h3][$h4][0], '</h4>') + 5);
                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['others'] = substr($last, strlen($array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['content']));
                                    for ($h5 = 0; $h5 < count($raw[$h1][$h2][$h3][$h4]); $h5++) {
                                        if ($h5 > 0) {
                                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['title'] = substr($raw[$h1][$h2][$h3][$h4][$h5], 0, strpos($raw[$h1][$h2][$h3][$h4][$h5], '</h5>'));
                                            $last = substr($raw[$h1][$h2][$h3][$h4][$h5], strpos($raw[$h1][$h2][$h3][$h4][$h5], '</h5>') + 5);
                                            $raw[$h1][$h2][$h3][$h4][$h5] = explode('<h6>', $raw[$h1][$h2][$h3][$h4][$h5]);
                                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['content'] = substr($raw[$h1][$h2][$h3][$h4][$h5][0], strpos($raw[$h1][$h2][$h3][$h4][$h5][0], '</h5>') + 5);
                                            $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['others'] = substr($last, strlen($array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['content']));
                                            for ($h6 = 0; $h6 < count($raw[$h1][$h2][$h3][$h4][$h5]); $h6++) {
                                                if ($h6 > 0) {
                                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['h6'][$h6 - 1]['title'] = substr($raw[$h1][$h2][$h3][$h4][$h5][$h6], 0, strpos($raw[$h1][$h2][$h3][$h4][$h5][$h6], '</h6>'));
                                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['h6'][$h6 - 1]['content'] = substr($raw[$h1][$h2][$h3][$h4][$h5][$h6], strpos($raw[$h1][$h2][$h3][$h4][$h5][$h6], '</h6>') + 5);
                                                    $array['h1'][$h1 - 1]['h2'][$h2 - 1]['h3'][$h3 - 1]['h4'][$h4 - 1]['h5'][$h5 - 1]['h6'][$h6 - 1]['others'] = substr($raw[$h1][$h2][$h3][$h4][$h5][$h6], strpos($raw[$h1][$h2][$h3][$h4][$h5][$h6], '</h6>') + 5);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    //$array = $raw;
    return $array;
}
