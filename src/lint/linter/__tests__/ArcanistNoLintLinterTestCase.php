<?php

final class ArcanistNoLintLinterTestCase extends ArcanistLinterTestCase {

  public function testLinter() {
    return $this->executeTestsInDirectory(dirname(__FILE__).'/nolint/');
  }

}
