<?php
namespace {
    if (!function_exists('ereg')) {
        function ereg($pattern, $subject, &$matches = array())
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_match($boundary . $pattern . $boundary, $subject, $matches);
        }

        function eregi($pattern, $subject, &$matches = array())
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_match($boundary . $pattern . $boundary . 'i', $subject, $matches);
        }

        function ereg_replace($pattern, $replacement, $string)
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_replace($boundary . $pattern . $boundary, $replacement, $string);
        }

        function eregi_replace($pattern, $replacement, $string)
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_replace($boundary . $pattern . $boundary . 'i', $replacement, $string);
        }

        function split($pattern, $subject, $limit = -1)
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_split($boundary . $pattern . $boundary, $subject, $limit);
        }

        function spliti($pattern, $subject, $limit = -1)
        {
            $boundary = _ereg_determine_boundary($pattern);
            return preg_split($boundary . $pattern . $boundary . 'i', $subject, $limit);
        }

        /**
         * @method _ereg_determine_boundary Determine a valid boundary based on the pattern. 
         * 
         * @var string $pattern The possibly escaped pattern to match for. 
         * @return string a suitable RegEx boundary
         * 
         * One would suggest just using preg_quote, but perhaps the pattern already is quoted, and therefore 
         * using preg_quote would just double-quote and with that ruin the pattern.  
         * The trick here is to find a boundary that is not within the pattern. 
         * I have contemplated using "any ASCII charachter" but that would require detecting character classes
         * and that's just too complicated.  
         * The chance that all of these boundaries will conflict, and if so; new ones can be added :)
         */
        function _ereg_determine_boundary($pattern) 
        {
            foreach (array('/', '@', '#', '%', '±') as $boundary) {
                if (false === strpos($pattern, $boundary)) { 
                    return $boundary;
                }
            }

            throw new Exception("Very sorry, could not shim the regular expression. Please follow the debug trace to see where the incompatible ereg-style function call is made.");
        }
    }
}
