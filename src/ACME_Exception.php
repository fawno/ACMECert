<?php
/*
		MIT License

		Copyright (c) 2018 Stefan Körfgen

		Permission is hereby granted, free of charge, to any person obtaining a copy
		of this software and associated documentation files (the "Software"), to deal
		in the Software without restriction, including without limitation the rights
		to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
		copies of the Software, and to permit persons to whom the Software is
		furnished to do so, subject to the following conditions:

		The above copyright notice and this permission notice shall be included in all
		copies or substantial portions of the Software.

		THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
		IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
		FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
		AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
		LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
		OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
		SOFTWARE.
	*/

// https://github.com/skoerfgen/ACMECert

namespace skoerfgen\ACMECert;

use Exception;

/**
 * ACMECert Exception
 *
 * @package skoerfgen\ACMECert
 */
class ACME_Exception extends Exception {
	protected string $type;
	protected array $subproblems;

	/**
	 * Construct the Exception
	 *
	 * @param string $type Type of Exception
	 * @param string $detail Detail of Exception
	 * @param array $subproblems Subproblems of Exception
	 * @return void
	 */
	function __construct(string $type, string $detail, array $subproblems = []) {
		$this->type = $type;
		$this->subproblems = $subproblems;

		parent::__construct(sprintf('%s (%s)', $detail, $type));
	}

	/**
	 * Get type of Exception
	 *
	 * @return string
	 */
	function getType() {
		return $this->type;
	}

	/**
	 * Get subproblems of Exception
	 *
	 * @return array
	 */
	function getSubproblems() {
		return $this->subproblems;
	}
}
