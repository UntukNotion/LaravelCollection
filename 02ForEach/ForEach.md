# For Each

Collection adalah struktur data turunan dari Iterable PHP

Dengan demikian, kita bisa melakukan iterasi data Collection menggunakan perintah for PHP

## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-    /**
-     * @test
-     */
-    public function createCollection(): void
-    {
-        // Membuat/mengubah array menjadi collection
-        $toCollection = collect([1, 2, 3]);
-
-        // Membuat/menguabh collection menjadi array
-        $toArray = $toCollection->all();
-
-        // unit test ini nilai dan urutannya harus sama
-        self::assertEquals([1, 2, 3], $toArray);
-
-        // unit test ini tidak peduli dengan index, yang penting nilainya harus sama
-        self::assertEqualsCanonicalizing([2, 1, 3], $toArray);
-    }

+    /**
+     * @test
+     */
+    public function forEach(): void
+    {
+        $toCollection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
+        
+        foreach ($toCollection as $key => $value) {
+            self::assertEquals($key + 1, $value);
+        }
+    }
}
```