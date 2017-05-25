<?php
namespace {
    if (!function_exists('ereg')) {
        function ereg($pattern, $subject, &$matches = array())
        {
            return preg_match('/'.str_replace("/", "\/", $pattern).'/', $subject, $matches);
        }

        function eregi($pattern, $subject, &$matches = array())
        {
            return preg_match('/'.str_replace("/", "\/", $pattern).'/i', $subject, $matches);
        }

        function ereg_replace($pattern, $replacement, $string)
        {
            return preg_replace('/'.str_replace("/", "\/", $pattern).'/', $replacement, $string);
        }

        function eregi_replace($pattern, $replacement, $string)
        {
            return preg_replace('/'.str_replace("/", "\/", $pattern).'/i', $replacement, $string);
        }

        function split($pattern, $subject, $limit = -1)
        {
            return preg_split('/'.str_replace("/", "\/", $pattern).'/', $subject, $limit);
        }

        function spliti($pattern, $subject, $limit = -1)
        {
            return preg_split('/'.str_replace("/", "\/", $pattern).'/i', $subject, $limit);
        }
    }
}
?>
