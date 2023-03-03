<?php
class DirectoryItems {
	private $filearray = array();
	public $directory;	// ���� � ����������
	public $replacechar;	// ������ ��� ������ � ������ ������
	// PHP5-style �����������
	public function __construct($directory, $replacechar = "_") {
		$this->replacechar = $replacechar;
		$d = '';
		if (is_dir($directory)) {
			if (!is_resource($d)) exit("Failed opening directory");
			while (false !== ($f = readdir($d))) {
					$this->filearray[$f] = $title;
				}
			}
			closedir($d);
		}
		else {
			exit("You should pass the directory name");
		}
	}
	// ������� ����� ����� ��� ������� File_Name ��� File Name, ����
	// $this->replacechar = "_", ��������
	private function createTitle($title) {
		$title = substr($title, 0, strrpos($title, '.'));
		// �������� ����������� ����
		$title = str_replace($this->replacechar, ' ', $title);
		return $title;
	}
	// ����� �� ����� ���� � ��� �� ���
	public function checkAllSpecificType($extension) {
		$bln = true;
		$ext = '';
		foreach ($this->filearray as $key => $value) {
			$ext = strtolower($ext);
			if ($extension != $ext) {
				break;
			}
		}
		return $bln;
	}
	// ����� ���������� ������ �� ����������
	public function filter($extension) {
		foreach ($this->filearray as $key => $value) {
			$ext = strtolower($ext);
			if ($ext != $extension) {
			}
		}
	}
	// ����� ������ ������� � ��������
	public function removeFilter() {
		$d = '';
		$d = @opendir($this->directory);
		if (!is_resource($d)) exit("Failed opening directory");
		while (false !== ($f = readdir($d))) {
			if (is_file($this->directory.'/'.$f)) {
				$title = $this->createTitle($f);
				$this->filearray[$f] = $title;
			}
		}
		closedir($d);
	}
	// ���������� �����������
	public function imagesOnly() {
		$types = array('jpg', 'jpeg', 'gif', 'png');
		foreach ($this->filearray as $key => $value) {
			$extension = strtolower($extension);
			if (!in_array($extension, $types)) {
			}
		}
	}
	// ����� ������� � ��������� ���� $filearray
	public function getFileArray() {
	}
	// ���������� ������ �������� (wrapper)
	function indexOrder() {
	}
	// "�����������" c��������� ������ �������� (wrapper)
	function naturalCaseInsensitiveOrder() {
	}
	// ���������� ������ � �������� (wrapper)
	function getCount() {
	}
}
?>