<?php
namespace {
    if (!function_exists('ereg')) {
        function ereg($pattern, $subject, &$matches = array())
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_match($boundary.$pattern.$boundary, $subject, $matches);
            }
        }

        function eregi($pattern, $subject, &$matches = array())
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_match($boundary.$pattern.$boundary.'i', $subject, $matches);
            }
        }

        function ereg_replace($pattern, $replacement, $string)
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_replace($boundary.$pattern.$boundary, $replacement, $string);
            }
        }

        function eregi_replace($pattern, $replacement, $string)
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_replace($boundary.$pattern.$boundary.'i', $replacement, $string);
            }
        }

        function split($pattern, $subject, $limit = -1)
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_split($boundary.$pattern.$boundary, $subject, $limit);
            }
        }

        function spliti($pattern, $subject, $limit = -1)
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary)
            if (false === strpos($pattern, $boundary)) { 
                return preg_split($boundary.$pattern.$boundary.'i', $subject, $limit);
            }
        }
    }
}
