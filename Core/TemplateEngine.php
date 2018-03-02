<?php
  namespace Core;

  class TemplateEngine
  {
    public function template($f)
    {
      $arrayMap = ["/{{(.+?)}}/" => function ($match) { return "<?= htmlspecialchars(" . $match[1] . ")?>";},
                   "/@[i][f]\s*\((.+)\)/" => function ($match) { return "<?php if (" . $match[1] . "): ?>";},
                   "/@[e][l][s][e][i][f]\s*\((.+)\)/" => function ($match) { return "<?php elseif (" . $match[1] . "): ?>";},
                   "/@[e][l][s][e]/" => function ($match) { return "<?php else: ?>";},
                   "/@[e][n][d][i][f]/" => function ($match) { return "<?php endif; ?>";},
                   "/@[f][o][r][e][a][c][h]\s*\((.+)\)/" => function ($match) { return "<?php foreach (" . $match[1] . "): ?>";},
                   "/@[e][n][d][f][o][r][e][a][c][h]/" => function ($match) { return "<?php endforeach; ?>";},
                   "/@[i][s][s][e][t]\((.+)\)/" => function ($match) { return "<?php if (isset(" . $match[1] . ")): ?>";},
                   "/@[e][n][d][i][s][s][e][t]/" => function ($match) { return "<?php endif; ?>";},
                   "/@[e][m][p][t][y]\s*\((.+)\)/" => function ($match) { return "<?php if (empty(" . $match[1] . "): ?>";},
                   "/@[e][n][d][e][m][p][t][y]/" => function ($match) { return "<?php endif; ?>";},
                   ];
      $handle = file_get_contents($f, FILE_USE_INCLUDE_PATH);
      $replace = preg_replace_callback_array($arrayMap, $handle);
      $storage = str_replace('View', 'StorageView', $f);
      file_put_contents($storage, $replace);
    }
  }
