<?php namespace App\Http\Controllers;

use App\Documentation;

class DocsController extends Controller {

	/**
	 * The documentation repository.
	 *
	 * @var Documentation
	 */
	protected $docs;

	/**
	 * Create a new controller instance.
	 *
	 * @param  Documentation  $docs
	 * @return void
	 */
	public function __construct(Documentation $docs)
	{
		$this->docs = $docs;
	}

	/**
	 * Show the root documentation page (/docs).
	 *
	 * @return Response
	 */
	public function showRootPage()
	{
		return redirect('docs/'.DEFAULT_VERSION);
	}

	/**
	 * Show a documentation page.
	 *
	 * @return Response
	 */
	public function show($version, $page = null)
	{
		if ( ! $this->isVersion($version)) {
			return redirect('docs/'.DEFAULT_VERSION.'/'.$version, 301);
		}

		$default_page = $version == '5.1' ? 'about' : 'installation';
		$content = $this->docs->get($version, $page ?: $default_page);

		$section = '';

		//this is convenient for switch the same doc to different version
		//if such doc does not exist, it will return to the specific version root page.
		if ($this->docs->sectionExists($version, $page)) {
			$section .= '/'.$page;
		} elseif ( ! is_null($page)) {
			return redirect('/docs/'.$version);
		}

		if (is_null($content)) {
			abort(404);
		}

		return view('docs', [
			'index' => $this->docs->getIndex($version),
			'content' => $content,
			'currentVersion' => $version,
			'versions' => $this->getDocVersions(),
			'currentSection' => $section,
		]);
	}

	/**
	 * Determine if the given URL segment is a valid version.
	 *
	 * @param  string  $version
	 * @return bool
	 */
	protected function isVersion($version)
	{
		return in_array($version, array_keys($this->getDocVersions()));
	}

	/**
	 * Get the available documentation versions.
	 *
	 * @return array
	 */
	protected function getDocVersions()
	{
		return [
			'5.1' => '5.1',
			'4.2' => '4.2'
		];
	}

}
