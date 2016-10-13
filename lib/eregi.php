<?php
namespace {
    if (!function_exists('ereg')) {
        function ereg($pattern, $subject, &$matches = [])
        {
            return preg_match('/'.$pattern.'/', $subject, $matches);
        }

        function eregi($pattern, $subject, &$matches = [])
        {
            return preg_match('/'.$pattern.'/i', $subject, $matches);
        }

        function ereg_replace($pattern, $replacement, $string)
        {
            return preg_replace('/'.$pattern.'/', $replacement, $string);
        }

        function eregi_replace($pattern, $replacement, $string)
        {
            return preg_replace('/'.$pattern.'/i', $replacement, $string);
        }

        function split($pattern, $subject, $limit = -1)
        {
            return preg_split('/'.$pattern.'/', $subject, $limit);
        }

        function spliti($pattern, $subject, $limit = -1)
        {
            return preg_split('/'.$pattern.'/i', $subject, $limit);
        }
    }
}
