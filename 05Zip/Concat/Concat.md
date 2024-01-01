## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-    /**
-     * @test
-     */
-    public function mapToGroups(): void
-    {
-        $collection = collect([
-            [
-                "name" => "Dyone",
-                "department" => "IT"
-            ],
-            [
-                "name" => "Rifky",
-                "department" => "IT"
-            ],
-            [
-                "name" => "Strankers",
-                "department" => "HR"
-            ]
-        ]);
-
-        $result = $collection->mapToGroups(function ($item) {
-            return [$item["department"] => $item["name"]];
-        });
-
-        self::assertEquals([
-            'IT' => collect(["Dyone", "Rifky"]),
-            'HR' => collect(["Strankers"])
-        ], $result->all());
-    }

+    /**
+     * @test
+     */
+    public function concat(): void
+    {
+        $collection1 = collect([1, 2, 3]);
+        $collection2 = collect([4, 5, 6]);
+
+        $collection3 = $collection1->concat($collection2);
+
+        self::assertEquals([1, 2, 3, 4, 5, 6], $collection3->all());
+    }
}
```