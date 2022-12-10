<?php // Operadores lógicos

/*
and &&
or ||
!
*/

/*
Difference between 'and' '&&' operator
The difference is the precedence when we compare AND with && operator.
The precedence of AND operator is lower than the operator = when the
evaluation is performed, therefore even if both the operators do the
same work, the result is different.

Este planteamiento es el mismo para 'or' y '||'
*/
$bool = TRUE and FALSE;
echo ($bool ? 'true' : 'false'), "\n";
$bool = TRUE && FALSE;
echo ($bool ? 'true' : 'false'), "\n";;

// The result of the expression (false || true) is assigned to $e
// Acts like: ($e = (false || true))
$e = false || true;

// The constant false is assigned to $f and then true is ignored
// Acts like: (($f = false) or true)
$f = false or true;


// El operador not ! invierte el valor de la afirmación
echo (!false ? 'true' : 'false'), "\n";;
